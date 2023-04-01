<@ if @{ :origUrl } = '/your-supervisors' @>
    <section id="@{ :origUrl |
        replace(
            '/\\//',
            ''
        )}" class="w-screen flex flex-col items-center mt-32 mb-16 scroll-mt-mobile-header 
        md:mb-24 md:scroll-mt-header">
        <div class="w-11/12 flex flex-col flex-wrap items-center gap-10 md:w-10/12 md:grid md:grid-cols-12 md:auto-rows-auto md:gap-y-10 md:gap-x-6 md:items-start md:justify-items-center">
            <h2 class="w-full text-5xl text-svj-green font-thin capitalize md:col-span-12">
                <!-- @{ title } -->
                Supervisors
            </h2>
            <@ ../elements/your_supervisors_carousel.php @>
            <!-- <div class="w-full md:col-span-12 py-6">
                <ul class="w-full flex gap-8 justify-center">
                    <@ ../elements/yoursupervisor_card.php @>
                    <@ ../elements/yoursupervisor_card.php @>
                <ul>
            </div> -->
            <!-- <@ ../elements/yoursupervisor_image.php @>
            <div class="w-full flex flex-col justify-center px-2 gap-5 md:col-start-5 md:col-end-12 md:row-start-2 md:row-end-13 md:px-0 md:w-full md:mt-10">
                <h3 class="text-4xl text-black font-semibold">@{ supervisor_name }</h3>
                <h4 class="text-3xl text-svj-green">@{ supervisor_title }</h4>
                <div class="flex flex-col gap-5 text-xl md:text-2xl font-thin">
                    @{ +main }
                    <ul class="flex flex-col gap-2 pl-5">
                        <@ newPagelist { 
                            type: 'children', 
                            context: '/your-supervisor/characteristics' 
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
            <div class="max-w-max text-white bg-svj-green px-16 py-10 flex flex-col gap-3.5 shadow-2xl items-center md:p-12 md:col-start-1 md:col-end-5 md:row-start-4 md:row-end-6 md:w-full md:mt-10">
                <h3 class="text-xl border-b-2 mb-2 pb-2 max-w-max md:text-2xl">Registraties</h3>
                <ul class="flex flex-col gap-3.5 text-base items-start list-none md:text-lg">
                    <@ newPagelist { 
                        type: 'children', 
                        context: '/your-supervisor/registrations' 
                    } @>
                    <@ foreach in pagelist @>
                        <li class="flex flex-row gap-2">
                            <span>—</span>
                            <span>@{ title }</span>
                        </li>
                    <@ end @>
            </div> -->
        </div>
    </section>
<@ end @>
