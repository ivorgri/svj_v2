<@ elements/header.php @>

<section class="w-screen flex flex-col items-center mt-32 mb-16 scroll-mt-mobile-header 
    md:mb-24 md:scroll-mt-header">
    <div class="w-11/12 flex flex-col flex-wrap items-center gap-10 md:w-10/12 md:grid md:grid-cols-12 md:auto-rows-auto md:gap-y-0 md:gap-x-6 md:items-start md:justify-items-center">
        <h2 class="w-full text-5xl text-svj-primary font-thin capitalize md:col-span-12">
            Jouw Supervisor
        </h2>
        <@ elements/your_supervisor_image.php @>
        <div class="w-full flex flex-col justify-center px-2 gap-5 md:col-start-5 md:col-end-12 md:row-start-2 md:row-end-13 md:px-0 md:w-full md:mt-10">
            <div class="flex flex-row flex-wrap md:grid gap-5 md:grid-cols-12 md:grid-rows-2">
                <h3 class="grow w-full text-4xl text-black font-semibold md:col-start-1 md:col-end-12 md:row-start-1 md:row-end-2">@{ supervisor_name }</h3>
                <@ if @{ url_supervisor_linkedin_link } @>
                    <a class="order-2 md:col-start-12 md:col-end-13 border-2 rounded-lg border-svj-primary p-1 h-10 w-10 max-h-10 max-w-10 flex justify-center" href="@{ url_supervisor_linkedin_link }" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-svj-primary h-full" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                    </a>
                <@ end @>
                <h4 class="grow text-3xl text-svj-secondary md:col-start-1 md:col-end-12 md:row-start-2 md:row-end-3">@{ supervisor_title }</h4>
            </div>
            <div class="flex flex-col gap-5 text-xl md:text-2xl font-thin text-gray-800	">
                @{ +main }
                <ul class="flex flex-col gap-2 pl-5">
                    <@ newPagelist { 
                        type: 'children', 
                        context: '/characteristics' 
                    } @>
                    <@ foreach in pagelist @>
                        <li class="flex flex-row gap-2">
                            <span>-</span>
                            <span>@{ title }</span>
                        </li>
                    <@ end @>
                </ul>
            </div>
        </div>
        <div class="max-w-max text-white bg-svj-primary px-16 py-10 flex flex-col gap-3.5 shadow-2xl items-center md:p-12 md:col-start-1 md:col-end-5 md:row-start-4 md:row-end-6 md:w-full md:mt-10">
            <h3 class="text-xl border-b-2 mb-2 pb-2 max-w-max md:text-2xl">Registraties</h3>
            <ul class="flex flex-col gap-3.5 text-base items-start list-none md:text-lg">
                <@ newPagelist { 
                    type: 'children', 
                    context: '@{ url }/registrations' 
                } @>
                <@ foreach in pagelist @>
                    <li class="flex flex-row gap-2">
                        <span>— @{ title }</span>
                    </li>
                <@ end @>
        </div>
    </div>
</section>
<section class="w-screen flex flex-col items-center mt-8 md:mt-8 mb-16 scroll-mt-mobile-header 
    md:mb-24 md:scroll-mt-header">
    <div class="w-full flex flex-col flex-wrap items-center gap-10 md:grid md:grid-cols-12 md:auto-rows-auto md:gap-6 md:items-start md:justify-items-center">
        <h2 class="w-full text-5xl text-svj-primary font-thin capitalize col-start-2 col-end-12">
            <@ newPagelist { 
                type: 'children', 
                limit: 1,
                context: '/'
            } @>
            <@ foreach in pagelist @>
                @{ title }
            <@ end @>
        </h2>
        <@ elements/your_supervisors_carousel.php @>
    </div>
</section>
<@ elements/footer.php @>