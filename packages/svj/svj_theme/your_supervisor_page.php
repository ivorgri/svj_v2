<@ elements/header.php @>

<section class="w-screen flex flex-col items-center mt-32 mb-16 scroll-mt-mobile-header 
    md:mb-24 md:scroll-mt-header">
    <div class="w-11/12 flex flex-col flex-wrap items-center gap-10 md:w-10/12 md:grid md:grid-cols-12 md:auto-rows-auto md:gap-y-0 md:gap-x-6 md:items-start md:justify-items-center">
        <h2 class="w-full text-5xl text-svj-primary font-thin capitalize md:col-span-12">
            Jouw Supervisor
        </h2>
        <@ elements/your_supervisor_image.php @>
        <div class="w-full flex flex-col justify-center px-2 gap-5 md:col-start-5 md:col-end-12 md:row-start-2 md:row-end-13 md:px-0 md:w-full md:mt-10">
            <!-- <div class="flex flex-row flex-wrap md:grid gap-2 lg:gap-5 md:grid-cols-12 md:grid-rows-2"> -->
            <div class="flex flex-row flex-wrap gap-2 lg:gap-5">
                <!-- <h3 class="grow w-full text-4xl text-black font-semibold md:col-start-1 md:col-end-11 md:row-start-1 md:row-end-2">@{ supervisor_name }</h3> -->
                <h3 class="grow w-3/4 max-w-3/4 text-4xl text-black font-semibold">@{ supervisor_name }</h3>
                <@ if @{ email_supervisor } @>
                <a class="order-2 md:order-1 md:col-start-11 md:col-end-12 border-2 rounded-lg border-svj-primary p-1 h-10 w-10 max-h-10 max-w-10 flex justify-center" href="mailto:@{ email_supervisor }" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve" class="fill-svj-primary">
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" class="fill-svj-primary">
                            <path d="M 75.546 78.738 H 14.455 C 6.484 78.738 0 72.254 0 64.283 V 25.716 c 0 -7.97 6.485 -14.455 14.455 -14.455 h 61.091 c 7.97 0 14.454 6.485 14.454 14.455 v 38.567 C 90 72.254 83.516 78.738 75.546 78.738 z M 14.455 15.488 c -5.64 0 -10.228 4.588 -10.228 10.228 v 38.567 c 0 5.64 4.588 10.229 10.228 10.229 h 61.091 c 5.64 0 10.228 -4.589 10.228 -10.229 V 25.716 c 0 -5.64 -4.588 -10.228 -10.228 -10.228 H 14.455 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            <path d="M 11.044 25.917 C 21.848 36.445 32.652 46.972 43.456 57.5 c 2.014 1.962 5.105 -1.122 3.088 -3.088 C 35.74 43.885 24.936 33.357 14.132 22.83 C 12.118 20.867 9.027 23.952 11.044 25.917 L 11.044 25.917 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            <path d="M 46.544 57.5 c 10.804 -10.527 21.608 -21.055 32.412 -31.582 c 2.016 -1.965 -1.073 -5.051 -3.088 -3.088 C 65.064 33.357 54.26 43.885 43.456 54.412 C 41.44 56.377 44.529 59.463 46.544 57.5 L 46.544 57.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            <path d="M 78.837 64.952 c -7.189 -6.818 -14.379 -13.635 -21.568 -20.453 c -2.039 -1.933 -5.132 1.149 -3.088 3.088 c 7.189 6.818 14.379 13.635 21.568 20.453 C 77.788 69.973 80.881 66.89 78.837 64.952 L 78.837 64.952 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10;  fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                            <path d="M 14.446 68.039 c 7.189 -6.818 14.379 -13.635 21.568 -20.453 c 2.043 -1.938 -1.048 -5.022 -3.088 -3.088 c -7.189 6.818 -14.379 13.635 -21.568 20.453 C 9.315 66.889 12.406 69.974 14.446 68.039 L 14.446 68.039 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                        </g>
                    </svg>
                </a>
                <@ end @>
                <@ if @{ url_supervisor_linkedin_link } @>
                    <a class="order-2 md:order-1 md:col-start-12 md:col-end-13 border-2 rounded-lg border-svj-primary p-1 h-10 w-10 max-h-10 max-w-10 flex justify-center" href="@{ url_supervisor_linkedin_link }" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-svj-primary h-full" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                    </a>
                <@ end @>
                <h4 class="md:order-2 grow text-3xl text-svj-secondary md:col-start-1 md:col-end-12 md:row-start-2 md:row-end-3 w-full">@{ supervisor_title }</h4>
            </div>
            <div class="flex flex-col gap-5 text-xl md:text-2xl font-thin text-gray-800	">
                @{ +main }
                <@ newPagelist { 
                    type: 'children', 
                    context: '@{ url }/registrations' 
                } @>
                <@ foreach in pagelist @>
                    <@ if @{ title } = "CRKBO" @>
                        <div class="self-center m-6 md:self-end md:m-8">
                            <@ elements/crkbo_logo.php @>
                        </div>
                        <@ end @>
                <@ end @> 
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