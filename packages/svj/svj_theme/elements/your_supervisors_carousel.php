<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<div class="w-full md:col-start-2 md:col-end-12 bg-svj-primary flex flex-col p-5 items-center text-white">
    <div id="supervisor-tag-filter" v-scope="SupervisorTagFilter()" class="flex items-center flex-col gap-2"></div>
    <div id="supervisor-carousel" v-scope="SupervisorCarousel()" class="flex"></div>

    <template id="supervisor-tag-filter-template">
        <span class="text-2xl underline font-bold">Ik ben op zoek naar</span>
        <ul v-if="store.supervisorTags.length > 0" class="flex flex-wrap gap-2 md:gap-1 text-gray-400">
            <li v-for="supervisorTag in store.supervisorTags">
                <input :id="supervisorTag" type="checkbox" :value="supervisorTag" v-model="store.selectedSupervisorTags" hidden>
                <label :for="supervisorTag" class="py-2 px-4 shadow-md no-underline rounded-full bg-white font-sans font-semibold text-sm hover:text-black focus:outline-none mr-2 select-none flex items-center cursor-pointer"
                :class="store.selectedSupervisorTags.indexOf(supervisorTag) !== -1 ? 'text-black' : ''">
                <span v-if="store.selectedSupervisorTags.indexOf(supervisorTag) !== -1" class="inline-flex items-center justify-center w-4 h-4 mr-2 rounded-full border border-gray-400 font-revicons">&times;</span><span>{{ supervisorTag }}</span>
            </label>
            </li>
        </ul>
    </template>

    <template id="supervisor-carousel-supervisors">
        <ul v-if="store.supervisors.length > 0" class="flex flex-row flex-1 flex-wrap items-center gap-4 justify-center">
            <li v-for="supervisor in store.supervisors" :id="supervisor.name.toLowerCase()"
                class="flex flex-col items-center gap-2 transition transform hover:scale-105 text-center">
                <a :href="'' + supervisor.url" class="flex flex-col items-center gap-2">
                    <img src="https://version2.supervisievoorjou.nl/packages/svj/svj_theme/images/supervisor1.png"
                    class="max-h-[35vh] h-[35vh] block mx-auto"
                    :class="store.selectedSupervisorTags.length === 0
                        ? '' 
                        : (
                            store.selectedSupervisorTags.every(tag => supervisor.tags.includes(tag))
                            ? ''
                            : 'grayscale'
                        )" alt="">
                    <h3 class="text-5xl">{{ supervisor.name }}</h3>
                    <ul class="flex flex-row flex-wrap gap-2 md:gap-1">
                        <li v-for="tag in supervisor.tags" :id="tag"
                            class="py-2 px-4 shadow-md no-underline rounded-full border border-white bg-svj-primary font-sans font-semibold text-sm mr-2 select-none flex items-center">
                            {{ tag }}
                        </li>
                    </ul>
                </a>
            </li>
        </ul>
    </template>

    <script>
        <@ newPagelist { 
            type: 'children', 
            context: '/your-supervisors' 
        } @>
        let supervisors = [
        <@ foreach in pagelist @>
            {'name':'@{ title }','tags':'@{ tags }','url':'@{ url }'},
        <@ end @>
        ]
        
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