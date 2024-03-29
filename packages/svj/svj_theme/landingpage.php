<@ elements/header.php @>
<main>
	<@ elements/slider.php @>
	<section class="w-screen flex flex-col items-center mt-8 md:mt-32 mb-16 scroll-mt-mobile-header 
    md:mb-24 md:scroll-mt-header">
		<div class="w-full flex flex-col flex-wrap items-center gap-10 md:grid md:grid-cols-12 md:auto-rows-auto md:gap-6 md:items-start md:justify-items-center">
			<h2 class="w-full text-5xl text-svj-primary font-thin capitalize col-start-2 col-end-12">
				<@ newPagelist { 
					type: 'children', 
					limit: 1,
					context: '@{ url }'
				} @>
				<@ foreach in pagelist @>
					@{ title }
				<@ end @>
			</h2>
			<@ elements/your_supervisors_carousel.php @>
		</div>
	</section>
	<@ sections/our_offer.php @>
	<@ sections/contact_us.php @>
	<@ sections/tariffs.php @>
</main>
<@ elements/footer.php @>
