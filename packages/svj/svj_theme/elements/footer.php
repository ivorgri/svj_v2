        <footer id="footer" class="w-full flex flex-col items-center mt-24
            md:flex-row">
            <div class="w-full bg-svj-tertiary text-black text-xl flex items-center justify-center h-32
            md:w-1/2">
                <span>&copy; 2022<?php $currentYear = date("Y");
                        if ($currentYear != 2022) {
                            echo "-".$currentYear;
                        }
                    ?> <strong>Supervisie voor Jou</strong>. Alle Rechten Voorbehouden</span>
            </div>
            <div class="w-full bg-svj-primary text-white text-xl flex items-center justify-center h-32
            md:w-1/2 md:flex">
                <button class="flex items-center justify-center gap-2" onclick="scrollToTop()">Naar boven<i class="arrow_carrot-up_alt2"></i></button>
        </footer>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script> -->
        <script>
            function scrollToTop() {
                window.scrollTo(0, 0);
            }
        </script>
        <script src="/packages/@{theme}/js/menu.js" async></script>
        <@ if @{ :origUrl } @>
            <script src="/packages/@{theme}/js/homepage_slider.js" async></script>
            <script src="/packages/@{theme}/js/contact_form.js" async></script>
            <script src="/packages/@{theme}/js/supervisor_modal.js" async></script>   
        <@ else @>
            <script src="/packages/@{theme}/js/automatic_redirect.js" async></script>          
        <@ end @>
    </body>
</html>