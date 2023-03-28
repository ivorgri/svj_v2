<# 
This template uses includes for elements that might be used also in other templates
such as the header, navbar and footer markup. 
#>
<section class="section">
		<div class="container">
			<div class="columns is-8 is-variable">
				<div class="column is-three-quarters content">
					<# 
					Note that the <h1> has added the 'am-block' class.
					This is essential to make the headline aligned with all other blocks
					in the +main variable.
					#>
					<h1 class="am-block title">
						@{ title }
					</h1>
					<p>Price: @{ amount  }</p>
				</div>
			</div>
		</div>
	</section>
