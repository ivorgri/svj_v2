<@ elements/header.php @>
<main>
	<@ newPagelist { 
		type: 'children', 
		context: '/'
	} @>
	<@ foreach in pagelist @>
		<@ sections/slider.php @>
		<@ sections/yoursupervisor.php @>
		<@ sections/ouroffer.php @>
		<@ sections/contactus.php @>
		<@ sections/tarrifs.php @>
	<@ end @>
</main>
<@ elements/footer.php @>
