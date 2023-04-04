<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<picture>
    <source v-for="supervisor_image in supervisor.images"
        :srcset="supervisor_image.file"
        :media="supervisor_image.media"
        :type="supervisor_image.type"/>
    
    <img
        v-if="supervisor.main_image"
        class="border rounded-full block mx-auto"
        :class="store.selectedSupervisorTags.length === 0
        ? '' 
        : (
            store.selectedSupervisorTags.every(tag => supervisor.tags.includes(tag))
            ? ''
            : 'grayscale'
        )"           
        :src="supervisor.main_image.file"
        alt="supervisor.main_image.caption"
        width="supervisor.main_image.width"
        height="supervisor.main_image.height"
    />
</picture>