<@ elements/header.php @>
<main class="h-screen w-full">
    <div id="slider-background" class="h-full fixed -z-10 scale-125">
        <img class="h-full max-w-none" src="/packages/@{theme}/images/background.jpg"/>
    </div>
    <div id="slider-interaction" class="grid grid-cols-12 grid-rows-3 fixed w-full h-full z-10 text-3xl">
        <button id="slider-left-button" class="row-start-1 row-end-4 col-start-1 col-end-1 justify-self-center"><</button>
        <a id="slider-info-button" href="#" class="row-start-3 row-end-3 col-start-2 col-end-7 flex flex-col items-center justify-center">Info</a>
        <a id="slider-contact-button" href="#" class="row-start-3 row-end-3 col-start-7 col-end-12 flex flex-col items-center justify-center">Contact</a>
        <button id="slider-right-button" class="row-start-1 row-end-4 col-start-12 col-end-12 justify-self-center">></button>
    </div>
    <div id="slider-supervisors" class="slider-supervisor w-full h-full grid grid-cols-3 grid-rows-1 fixed">
        <div class="h-full slider-supervisor-image row-start-1 col-start-2 col-end-2 flex justify-center items-end">
            <img class="h-4/6 max-w-none justify-self-center" src="/packages/@{theme}/images/supervisor1.png"/>
        </div>
        <div class="h-full slider-supervisor-image row-start-1 col-start-2 col-end-2 flex justify-center items-end" style="opacity:0">
            <img class="h-4/6 max-w-none" src="/packages/@{theme}/images/supervisor2.png" />
        </div>
        <div class="h-full slider-supervisor-image row-start-1 col-start-2 col-end-2 flex justify-center items-end" style="opacity:0">
            <img class="h-4/6 max-w-none" src="/packages/@{theme}/images/supervisor3.png" />
        </div>
    </div>
</main>
<@ elements/footer.php @>
