<section class="w-screen flex flex-col items-center scroll-mt-mobile-header 
        md:scroll-mt-header">
    <@ if @{ :origUrl } = '/contact-us' @>
        <@ newPagelist { 
            type: 'children', 
            offset: 2,
            limit: 1,
            context: '/'
        } @>
        <@ foreach in pagelist @>
            <@ ../elements/contact_us_form.php @>
        <@ end @>
    <@ else @>
        <@ newPagelist { 
            type: 'children', 
            offset: 2,
            limit: 1,
            context: '@{ url }'
        } @>
        <@ foreach in pagelist @>
            <@ ../elements/contact_us_form.php @>
        <@ end @>
    <@ end @>
</section>
<hr class="w-screen my-12 border-y border-black/10">