<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<picture class="h-full w-full object-cover row-start-1 row-end-1 col-start-1 col-end-2">
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
    <@ filelist { glob: @{ images | def ('04-*.jpg, 04-*.jpeg, 04-*.png') }, order: desc } @>
    <@ if @{ :filelistCount } @>
        <@ foreach in filelist @>
            <img 
                class="object-cover h-full w-full"           
                src="@{ :file }"
                alt="@{ :caption }"
                width="@{ :width }"
                height="@{ :height }"
            />
        <@ end @>
    <@ end @>
</picture>