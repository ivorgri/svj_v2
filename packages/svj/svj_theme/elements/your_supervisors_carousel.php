<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<div class="w-full md:col-start-1 md:col-end-13 bg-svj-primary flex flex-col p-5 items-center text-white">
    <div id="supervisor-tag-filter" v-scope="SupervisorTagFilter()" class="flex items-center flex-col gap-2"></div>
    <div id="supervisor-carousel" v-scope="SupervisorCarousel()" class="flex"></div>

    <template id="supervisor-tag-filter-template">
        <span class="text-2xl underline font-bold">Ik zoek een supervisor voor:</span>
        <ul id="supervisor-tag-list" v-if="store.supervisorTags.length > 0" class="flex flex-wrap gap-2 md:gap-1 text-gray-400">
            <li class="supervisor-tag" v-for="supervisorTag in store.supervisorTags">
                <input :id="supervisorTag" type="checkbox" :value="supervisorTag" v-model="store.selectedSupervisorTags" hidden>
                <label :for="supervisorTag" class="py-2 px-4 shadow-md no-underline rounded-full bg-white font-sans font-semibold text-sm hover:text-black focus:outline-none  select-none flex items-center cursor-pointer"
                :class="store.selectedSupervisorTags.indexOf(supervisorTag) !== -1 ? 'text-black' : ''">
                <span v-if="store.selectedSupervisorTags.indexOf(supervisorTag) !== -1" class="inline-flex items-center justify-center w-4 h-4 rounded-full border border-gray-400 font-revicons">&times;</span><span>{{ supervisorTag }}</span>
            </label>
            </li>
        </ul>
    </template>

    <template id="supervisor-carousel-supervisors">
        <ul v-if="store.supervisors.length > 0" class="flex flex-row flex-1 flex-wrap items-center gap-6 justify-center">
            <li v-for="supervisor in store.supervisors" :id="supervisor.name.toLowerCase()"
                class="flex flex-col items-center gap-2 transition transform hover:scale-105 text-center w-full md:w-1/4 p-4 md:h-full"
                :class="store.selectedSupervisorTags.length === 0
                        ? '' 
                        : (
                            store.selectedSupervisorTags.every(tag => supervisor.tags.includes(tag))
                            ? 'order-first'
                            : 'order-last'
                        )">
                <a :href="'' + supervisor.url" class="flex flex-col items-center gap-2">
                    <@ your_supervisor_carousel_image.php @>
                    <h3 class="text-5xl">{{ supervisor.name }}</h3>
                    <ul class="flex flex-row flex-wrap gap-2 md:gap-1 justify-center">
                        <li v-for="tag in supervisor.tags" :id="tag"
                            class="py-2 px-4 shadow-md no-underline rounded-full border border-white bg-svj-primary font-sans font-semibold text-sm mr-2 select-none flex items-center">
                            {{ tag }}
                        </li>
                    </ul>
                </a>
            </li>
        </ul>
        <script>
            // https://stackoverflow.com/questions/50439298/sort-elements-in-multiple-flexbox-rows-according-to-their-width-size
            function getElementWidth(element) {
                const style = window.getComputedStyle(element);
                return element.offsetWidth;
            }

            function getBestFit(elements, availableSpace) {
                let minAvailableSpace = availableSpace;
                let bestFitIndex = -1;
                
                elements.forEach((element, i) => {
                    if (element.used) {
                    return;
                    }
                    
                    const elementAvailableSpace = availableSpace - element.width;
                    
                    if (elementAvailableSpace >= 0 && elementAvailableSpace < minAvailableSpace) {
                    minAvailableSpace = elementAvailableSpace;
                    bestFitIndex = i;
                    }
                });
                
                return bestFitIndex;
            }

            function getFirstNotUsed(elements) {
                for (let element of elements) {
                    if (!element.used) {
                    return element;
                    }
                }
            }

            const categoryList = document.getElementById('supervisor-tag-list');
            const totalSpace = categoryList.clientWidth;
            const items = Array.from(categoryList.children).map((element) => {
                return {
                    element,
                    used: false,
                    width: getElementWidth(element),
                };
            });
            const totalItems = items.length;

            const firstItem = items[0];
            const sortedElements = [firstItem.element];

            firstItem.used = true;
            let availableSpace = totalSpace - firstItem.width;

            for (let i = 1; i < totalItems; ++i) {
                const bestFitIndex = getBestFit(items, availableSpace);
                
                let item;
                
                if (bestFitIndex === -1) {
                    item = getFirstNotUsed(items);
                    availableSpace = totalSpace - item.width;
                } else {
                    item = items[bestFitIndex];
                    availableSpace -= item.width;
                }
                
                sortedElements.push(item.element);  
                item.used = true;
            }

            sortedElements.forEach((element) => {          
                categoryList.appendChild(element);
            });
        </script>
    </template>

    <script>
        <@ newPagelist { 
            type: 'children', 
            context: '/your-supervisors' 
        } @>
        let supervisors = [
        <@ foreach in pagelist @>
            {'name':'@{ title }','tags':'@{ tags }','url':'@{ url }','images':[]},
        <@ end @>
        ]

        let images = [];
        let main_image;
        let supervisorIndex = 0;
        <@ foreach in pagelist @>
            <@ filelist { glob: @{ images | def ('*.webp,*.jpg,*.jpeg,*.png') }, order: desc } @>
            images = [
            <@ foreach in filelist @>
                {'file':'@{ :file }','caption':'@{ :caption }','width':'@{ :width }','height':'@{ :height }'},
            <@ end @>
            ]

            main_image = undefined;
            
            images.forEach((image,index) => {
                let extension = image.file.slice((image.file.lastIndexOf(".") - 1 >>> 0) + 2);
                if (extension == "webp") {
                    image.type = "image/webp";
                } else if (extension == "jpg" || extension == "jpeg") {
                    image.type = "image/jpg";
                } else if (extension == "png") {
                    image.type = "image/png";
                }
                image.media = `(min-width: ${image.width}px)`;
                if (!main_image || parseInt(image.width) > parseInt(main_image.width)) {
                    main_image = image;
                }
            })

            supervisorIndex = @{ :i } -1;
            supervisors[supervisorIndex].images = images;
            supervisors[supervisorIndex].main_image = main_image;
        <@ end @>

        let supervisorTagsSet = new Set();
        supervisors.forEach((supervisor,index) => {
            const splitTags = supervisor.tags.split(",").map(function(item) {
                return item.trim();
            });
            supervisors[index].tags = splitTags;
            for (let tagIndex in splitTags) {
                supervisorTagsSet.add(splitTags[tagIndex]);
            }
        })
        const supervisorTags = Array.from(supervisorTagsSet);
    </script>
    <script src="/packages/@{theme}/js/your_supervisors_carousel.js" type="module"></script>
</div>