<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<div class="w-full md:col-start-2 md:col-end-12 bg-svj-green flex flex-col p-5 items-center text-white">
    <span>Ik ben op zoek naar:</span>
    <div id="supervisor-tag-filter" class="hidden flex-1">
        <button id="supervisor-tag-template" class="py-2 px-4 shadow-md no-underline rounded-full bg-white text-gray-400 font-sans font-semibold text-sm border-blue btn-primary hover:text-black hover:bg-blue-light focus:outline-none active:shadow-none mr-2"></button>
    </div>
    <div class="flex">
        <@ newPagelist { 
            type: 'children', 
            context: '/your-supervisors' 
        } @>
        <@ foreach in pagelist @>
            <div class="flex flex-col flex-1 items-center">
                <img class="grayscale" src="https://version2.supervisievoorjou.nl/packages/svj/svj_theme/images/supervisor1.png" alt="">
                <h3 class="text-5xl">@{ title }</h3>
                <span class="supervisor-tags">@{ tags }</span>
            </div>
        <@ end @>
    </div>
    <script>
        (function() {
            const supervisorTagsSpans = document.getElementsByClassName("supervisor-tags");
            console.log(supervisorTagsSpans);
            let supervisors = {};
            let allSupervisorTags = [];
            for (let supervisorTagsSpan of supervisorTagsSpans) {
                const supervisorDiv = supervisorTagsSpan.parentNode;
                const supervisorName = supervisorDiv.childNodes[3].innerText.replace(/\s*Title/,"").toLowerCase();
                supervisors[supervisorName] = {};
                supervisors[supervisorName]["element"] = supervisorDiv;
                const supervisorTagsText = supervisorTagsSpan.innerText
                    .replaceAll(/,\s*/ig,",")
                    .replace(/\s*Tags/,"");
                const supervisorTags = supervisorTagsText.split(",");
                supervisors[supervisorName]["tags"] = supervisorTags;
                for (let supervisorTag of supervisorTags) {
                    if(allSupervisorTags.indexOf(supervisorTag) === -1) {
                        allSupervisorTags.push(supervisorTag);
                    }
                }
            }

            const supervisorTagFilter = document.getElementById("supervisor-tag-filter");
            const supervisorTagButtonTemplate = document.getElementById("supervisor-tag-template");
            for (let uniqueSupervisorTag of allSupervisorTags) {
                const newSupervisorTagButton = supervisorTagButtonTemplate.cloneNode(true);
                newSupervisorTagButton.innerText = uniqueSupervisorTag;
                newSupervisorTagButton.id = `supervisor-tag-${uniqueSupervisorTag}`;
                newSupervisorTagButton.addEventListener("click", (event) => {
                    toggleSupervisorTag(event.target);
                });
                supervisorTagFilter.appendChild(newSupervisorTagButton);
            }
            supervisorTagButtonTemplate.remove();
            supervisorTagFilter.classList.add("flex");
            supervisorTagFilter.classList.remove("hidden");

            let selectedSupervisors = [];
            let selectedSupervisorTags = [];
            function toggleSupervisorTag(supervisorTagButton) {
                const supervisorTag = supervisorTagButton.innerText;
                console.log(supervisorTag);
                const indexSupervisorTag = selectedSupervisorTags.indexOf(supervisorTag);
                if (indexSupervisorTag === -1) { // Add
                    selectedSupervisorTags.push(supervisorTag)
                    // supervisorTagButton.classList.remove('text-gray-400');
                    // supervisorTagButton.classList.add('text-black');
                } else { // Remove
                    selectedSupervisorTags.splice(indexSupervisorTag,1)
                    // supervisorTagButton.classList.remove('text-black');
                    // supervisorTagButton.classList.add('text-gray-400');
                }
                console.log(selectedSupervisorTags);
                selectedSupervisors = [];
                for (let supervisor in supervisors) {
                    const supervisorObject = supervisors[supervisor];
                    const supervisorTags = supervisorObject["tags"];
                    let matchesAllTags = true;
                    for (let selectedSupervisorTagIndex in selectedSupervisorTags) {
                        const selectedSupervisorTag = selectedSupervisorTags[selectedSupervisorTagIndex];
                        if (supervisorTags.indexOf(selectedSupervisorTag) === -1) {
                            matchesAllTags = false;
                        }
                    }
                    if (matchesAllTags) {
                        selectedSupervisors.push(supervisorObject);
                    }
                }
                console.log(selectedSupervisors);
            }
        })();
    </script>
</div>