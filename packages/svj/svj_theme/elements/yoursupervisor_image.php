<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<picture class="h-full w-8/12 md:col-start-1 md:col-end-5 md:row-start-2 md:row-end-4 md:mt-10">
    <@ filelist { glob: @{ images | def ('*.webp') }, order: desc } @>
    <@ if @{ :filelistCount } @>
        <@ foreach in filelist @>
            <source 
                srcset="@{ :file }"
                media="(min-width: @{ :file | replace('/\.\*-\(\\\d\*\).webp/','$1') }px)"
                type="image/webp"
            />
        <@ end @>
    <@ end @>
    <@ filelist { glob: @{ images | def ('*.jpg, *.jpeg, *.png') }, order: desc } @>
    <@ if @{ :filelistCount } @>
        <@ foreach in filelist @>
            <source 
                srcset="@{ :file }"
                media="(min-width: @{ :width }px)"
                type="image/jpeg"
            />
        <@ end @>
    <@ end @>
    <@ filelist { glob: @{ images | def ('02-*.jpg, 02-*.jpeg, 02-*.png') }, order: desc } @>
    <@ if @{ :filelistCount } @>
        <@ foreach in filelist @>
            <img 
                class="border rounded-full md:w-full"           
                src="@{ :file }"
                alt="@{ :caption }"
                width="@{ :width }"
                height="@{ :height }"
            />
        <@ end @>
    <@ end @>
</picture>