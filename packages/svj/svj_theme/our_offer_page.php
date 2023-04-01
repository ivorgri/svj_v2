<@ elements/header.php @>
<main class="w-screen flex flex-col items-center mt-32 mb-16 scroll-mt-mobile-header 
    md:mb-24 md:scroll-mt-header">
    <div class="w-10/12 gap-10 flex flex-col flex-wrap py-12">
        <h2 class="w-full text-5xl text-svj-primary font-thin capitalize md:col-span-12">
            @{ title }
        </h2>
        <div class="text-xl text-black flex flex-col gap-8 md:pl-10">@{ +main }</div>
        <span class="text-lg text-svj-primary font-semibold self-end pr-10 md:pr-32">@{ subtitle }</span>
    </div>
</main>
<@ elements/footer.php @>