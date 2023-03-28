<@ if @{ :origUrl } = '/contact-us' @>
    <section id="@{ :origUrl |
        replace(
            '/\\//',
            ''
        )}" class="w-screen flex flex-col items-center scroll-mt-mobile-header 
            md:scroll-mt-header">
        <div class="w-10/12 flex flex-col items-center gap-10">
            <h2 class="text-5xl text-svj-green font-thin">@{ title }</h2>
            <hr class="my-5 border-y border-black/10 w-10/12">
            <p class="w-10/12 text-center leading-relaxed text-xl 
                md:text-2xl md:w-8/12">@{ contact_message }</p>
            <div id="info-message" class="border border-svj-green rounded-3xl py-2 px-5 hidden">
                <h3 id="info-message-title" class="text-xl text-svj-green
                    md:text-2xl"></h3>
            </div>
            <div id="error-message" class="border border-red-600 rounded-3xl py-2 px-5 hidden">
                <h3 id="error-message-title" class="text-xl text-red-600
                    md:text-2xl"></h3>
            </div>
            <form method="POST" id="contact-form" class="text-xl flex flex-wrap gap-5">
                <fieldset class="flex flex-wrap items-center justify-left gap-5">
                    <input type="text" name="name" id="name" class="border border-black/10 p-2 grow" placeholder="@{ placeholder_name }" required>
                    <input type="email" name="email" id="email" class="border border-black/10 p-2 grow-[3]" placeholder="@{ placeholder_email }" required>
                    <textarea name="message" id="message" rows="8" cols="20" class="border border-black/10 p-2 w-full" placeholder="@{ placeholder_message }" required></textarea>
                </fieldset>
                <fieldset>
                    <label class="honnieone honnie" for="name-first"></label>
                    <input class="honnieone honnie" autocomplete="off" type="text" id="name-first" name="name-first" placeholder="Your name here" novalidate>
                    <label class="honnieone honnie" for="e-mail"></label>
                    <input class="honnieone honnie" autocomplete="off" type="email" id="e-mail" name="e-mail" placeholder="Your e-mail here" novalidate>
                    <label class="honnietwo honnie" for="name-last"></label>
                    <input class="honnietwo honnie" autocomplete="off" type="text" id="name-last" name="name-last" value="John Doe" novalidate>
                    <label class="honnietwo honnie" for="retype-email"></label>
                    <input class="honnietwo honnie" autocomplete="off" type="text" id="retype-email" name="retype-email" value="prevent_supervisievoorjou.nl" novalidate>
                </fieldset>	
                <fieldset class="flex flex-row items-center">
                    <button id="submit" type="submit" value="Send" disabled class="bg-svj-green text-white rounded-3xl py-2 px-5 uppercase hover:bg-svj-green-button-hover flex items-center">Verstuur</button>
                </fieldset>
            </form>
        </div>
    </section>
    <hr class="w-screen my-12 border-y border-black/10">
<@ end @>