<@ if @{ :origUrl } = '/tariffs' @>
    <@ newPagelist { 
        type: 'children', 
        context: '/tariffs' 
    } @>
    <section id="@{ :origUrl |
        replace(
            '/\\//',
            ''
        )}" class="w-screen flex flex-col items-center mb-24 scroll-mt-mobile-header 
            md:scroll-mt-header">
        <div class="w-10/12 gap-7 flex flex-row flex-wrap">
            <h2 class="w-full text-5xl text-svj-green font-thin mb-6">@{ title }</h2>
            <@ foreach in pagelist @>
                <div class="border-b grid grid-rows-2 grid-cols-12 text-lg w-full pb-5 md:text-xl">
                    <h3 class="text-gray-700 text-xl font-semibold col-span-12 row-span-1 md:text-2xl">@{ title }</h3>
                    <span class="text-right row-span-1 col-span-10">Prijs:</span>
                    <span class="text-right row-span-1 col-span-2 text-svj-green md:col-span-1">&euro; @{ amount }</h6>
                </div>
            <@ end @>
        </div>
    </section>
<@ end @>