<@ elements/header.php @>
<main class="h-screen w-full grid grid-rows-7 grid-cols-12">
    <!-- <div id="slider-background" class="h-full md:w-full fixed -z-10 scale-125">
        <img class="h-full max-w-none md:w-full blur-sm" src="/packages/@{theme}/images/background.jpg"/> -->
        <!-- <div id="overlay" class="fixed top-0 left-0 h-full w-full bg-gray-800 opacity-30"></div> 
    </div>-->
    <div id="split-background" class="bg-svj-green col-start-8 col-end-13 row-start-1 row-end-7 opacity-90 h-full w-full"></div>
    <div id="supervisor-content" class="col-start-1 col-end-7 row-start-1 row-end-7">
        <a id="slider-info-button bg-svj-green border border-rounded text-white text-3xl" href="#">Info</a>
        <a id="slider-contact-button bg-svj-green border border-rounded text-white text-3xl" href="#">Contact</a>
    </div>
    <!--<div id="slider-interaction" class="grid grid-cols-12 grid-rows-3 fixed w-full h-full z-10 text-3xl">
        <button id="slider-left-button" class="row-start-1 row-end-4 col-start-1 col-end-1 justify-self-center"><</button>
        <a id="slider-info-button" href="#" class="row-start-3 row-end-3 col-start-2 col-end-7 flex flex-col items-center justify-center">Info</a>
        <a id="slider-contact-button" href="#" class="row-start-3 row-end-3 col-start-7 col-end-12 flex flex-col items-center justify-center">Contact</a>
        <button id="slider-right-button" class="row-start-1 row-end-4 col-start-12 col-end-12 justify-self-center">></button>
    </div>-->
    
    <div id="slider-supervisors" class="slider-supervisor w-full h-full col-start-8 col-end-13 row-start-3 row-end-7">
        <div class="slider-supervisor-image flex">
            <img class="h-4/6 max-w-none drop-shadow-[0_0px_50px_rgba(255,255,255,0.95)]" src="/packages/@{theme}/images/supervisor1.png"/>
            <h1 class="text-3xl font-logo">
                Seline
            </h1>
        </div>
        <div class="slider-supervisor-image flex" style="opacity:0">
            <img class="h-4/6 max-w-none drop-shadow-[0_0px_50px_rgba(255,255,255,0.95)]" src="/packages/@{theme}/images/supervisor2.png" />
            <h1 class="text-3xl font-logo">
                Fransje
            </h1>
        </div>
        <div class="slider-supervisor-image flex" style="opacity:0">
            <img class="h-4/6 max-w-none drop-shadow-[0_0px_50px_rgba(255,255,255,0.95)]" src="/packages/@{theme}/images/supervisor3.png" />
            <h1 class="text-3xl font-logo">
                Debbie
            </h1>
        </div>
    </div>
</main>
<@ elements/footer.php @>
