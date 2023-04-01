<section class="h-mobile-slider flex flex-col w-screen text-white mt-mobile-header scroll-mt-mobile-header 
        md:h-slider md:mt-header md:scroll-mt-header">
    <@ newPagelist { 
        type: 'children', 
        context: '@{ url }slider',
        excludeHidden: false
    } @>
    <div class="progress-bar w-screen col-span-12 row-span-1 h-[2px]">
        <div id="progress-slider" class="progress-slider h-full bg-svj-primary" style="width: var(--progress-slider-width)"></div>
    </div>
    <div class="slider grid grid-cols-12 auto-rows-auto place-items-center h-full overflow-hidden">
        <button
            id="previous-slide-button" 
            class="col-start-1 col-end-2 row-start-1 row-end-2 self-center justify-self-start ml-4 z-10 bg-gray-500/50 w-12 h-12 text-lg font-revicons flex justify-center items-center hover:bg-black focus:bg-black transition duration-200 ease-in-out">&#59428;</button>
        <button
            id="next-slide-button"  
            class="col-start-12 col-end-13 row-start-1 row-end-2 self-center justify-self-end mr-4 z-10 bg-gray-500/50 h-12 w-12 text-lg font-revicons flex justify-center items-center hover:bg-black focus:bg-black transition duration-200 ease-in-out">&#59429;</button>
        <@ foreach in pagelist @>
            <div class="slide w-screen h-mobile-slider col-start-1 col-end-13 row-start-1 row-end-2 grid grid-cols-12 grid-rows-5 gap-y-5 justify-center 
            md:gap-y-6 md:h-slider
            transition ease-in-out delay-150 duration-1000">
                <span class="header text-1xl col-start-3 col-end-12 row-start-2 row-end-3 z-[5] md:text-3xl md:col-start-3 md:col-end-12">@{ subtitle }</span>
                <h2 class="header text-4xl font-bold col-start-3 col-end-12 row-start-3 row-end-4 z-[5] md:text-5xl md:col-start-3 md:col-end-12 lg:text-7xl">@{ title }</h2>
                <div class="header text-1xl text-svj-primary font-semibold col-start-3 col-end-12 row-start-4 row-end-5 z-[5] md:text-2xl md:col-start-3 md:col-end-12 lg:text-3xl">
                    <span class="pb-2 border-b-2 border-svj-primary hover:border-b-4 focus:border-b-4 transition duration-200 ease-in-out">
                        <a href="@{ url_slide_link }">@{ slide_link_title }</a>
                    </span>
                </div>
                <div class="h-full w-screen grid col-start-1 col-end-13 row-start-1 row-end-6 grid-cols-1 grid-rows-1" in:fly="{{ x: 400, duration: 2000 }}" out:fly="{{ x: -400, duration: 1500 }}">
                    <div class="h-full w-screen bg-black/50 row-start-1 row-end-1 col-start-1 col-end-2 z-[1]"></div>
                    <@ ../elements/slider_image.php @>
                </div>
            </div>
        <@ end @>
    </div>
</section>