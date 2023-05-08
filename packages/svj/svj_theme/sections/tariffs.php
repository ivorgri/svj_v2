
<section class="w-screen flex flex-col items-center mb-24 scroll-mt-mobile-header 
        md:scroll-mt-header">
    <div class="w-10/12 gap-7 flex flex-row flex-wrap">
        <@ if @{ :origUrl } = '/' @>
            <@ newPagelist { 
                type: 'children', 
                offset: 3,
                limit: 1,
                context: '/'
            } @>
            <@ foreach in pagelist @>
                <h2 class="w-full text-5xl text-svj-primary font-thin mb-6">@{ title }</h2>
                <@ newPagelist { 
                    type: 'children',
                    context: '@{ :origUrl }',
                    excludeHidden: false
                } @>
                <@ foreach in pagelist @>
                    <div class="border-b grid grid-rows-2 grid-cols-12 text-lg w-full pb-5 md:text-xl">
                        <h3 class="text-gray-700 text-xl font-semibold col-span-12 row-span-1 md:text-2xl">@{ title }</h3>
                        <span class="text-right row-span-1 col-span-10">Prijs:</span>
                        <span class="text-right row-span-1 col-span-2 text-svj-primary md:col-span-1">&euro; @{ amount }</h6>
                    </div>
                <@ end @>
            <@ end @>
        <@ end @>
        <@ if @{ :origUrl } = '/tariffs' @>
            <@ newPagelist { 
                type: 'children', 
                offset: 3,
                limit: 1,
                context: '/'
            } @>
            <@ foreach in pagelist @>
                <h2 class="w-full text-5xl text-svj-primary font-thin mb-6">@{ title }</h2>
                <div class="w-full text-xl text-black flex flex-col gap-8 md:pl-10 border-b pb-4">@{ +main }</div>
                <@ newPagelist { 
                    type: 'children',
                    context: '@{ :origUrl }', 
                    excludeHidden: false
                } @>
                <@ foreach in pagelist @>
                    <div class="border-b grid grid-rows-2 grid-cols-12 text-lg w-full pb-5 md:text-xl">
                        <h3 class="text-gray-700 text-xl font-semibold col-span-12 row-span-1 md:text-2xl">@{ title }</h3>
                        <span class="text-right row-span-1 col-span-10">Prijs:</span>
                        <span class="text-right row-span-1 col-span-2 text-svj-primary md:col-span-1">&euro; @{ amount }</h6>
                    </div>
                <@ end @>
            <@ end @>
        <@ end @>
    </div>
</section>