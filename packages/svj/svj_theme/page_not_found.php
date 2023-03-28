<@ elements/header.php @>
<main>
    <section id="page-not-found" class="w-screen flex flex-row items-center justify-center mt-32 mb-16 scroll-mt-mobile-header 
        md:mb-24 md:scroll-mt-header">
        <div class="w-11/12 flex flex-row flex-wrap items-center gap-10 md:w-10/12 md:gap-y-0 md:gap-x-6 md:items-start md:justify-items-center">
        <h2 class="w-full text-5xl text-svj-green font-thin">
            @{ page_not_found_title }
        </h2>
        <p class="w-full px-2 md:w-full md:mt-10 md:px-12">
            @{ text_page_not_found_content }
        </p>
    </section>
</main>
<@ elements/footer.php @>