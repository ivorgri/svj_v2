<section class="section">
	<div class="container">
		<div class="columns is-8 is-variable">
			<main class="column is-three-quarters content">
				<# 
				Note that the <h1> has added the 'am-block' class.
				This is essential to make the headline aligned with all other blocks
				in the +main variable.
				#>
				<h1 class="am-block title">
					@{ title }
				</h1>
				@{ contact_message }
				@{ placeholder_name }
            	@{ placeholder_email }
				@{ placeholder_message }
				@{ navigation_title }
			</main>
		</div>
	</div>
</section>