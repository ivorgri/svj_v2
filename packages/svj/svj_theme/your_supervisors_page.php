<@ elements/header.php @>
<section class="w-screen flex flex-col items-center mt-32 mb-16 scroll-mt-mobile-header 
    md:mb-24 md:scroll-mt-header">
    <div class="w-11/12 flex flex-col flex-wrap items-center gap-10 md:w-10/12 md:grid md:grid-cols-12 md:auto-rows-auto md:gap-y-0 md:gap-x-6 md:items-start md:justify-items-center">
        <h2 class="w-full text-5xl text-svj-primary font-thin capitalize md:col-span-12">
            @{ title }
        </h2>
        <@ ../elements/your_supervisors_carousel.php @>
    </div>
</section>
<@ elements/footer.php @>