<nav
	id="navbar"
	class="hidden fixed bottom-0 pb-1 h-full flex-col items-center w-full uppercase bg-white
		col-span-4 justify-end
		md:flex md:relative
		xl:col-span-2" role="navigation" aria-label="main navigation">
	<ul class="flex flex-col gap-y-1
		md:flex-row md:flex-wrap md:gap-x-5 md:gap-y-0">
		<li class="navbar-item
				border-b-4 border-transparent text-xl transition duration-200 ease-in-out hover:border-svj-primary focus:border-svj-primary">
			<a class="text-slate-400 hover:text-black focus:text-black" href="/">
				Home				
			</a>
		</li>
		<@ newPagelist { 
			type: 'children', 
			context: '/' 
		} @>	
		<@ foreach in pagelist @>
			<li class="navbar-item
				border-b-4 border-transparent text-xl transition duration-200 ease-in-out hover:border-svj-primary focus:border-svj-primary">
				<a class="text-slate-400 hover:text-black focus:text-black" href="@{ :origUrl }">
					<@ if @{ navigation_title } @>
						@{ navigation_title }
					<@ else @>
						@{ title }
					<@ end @>					
				</a>
			</li>
		<@ end @>
		<!-- <@ newPagelist { 
			type: 'children', 
			context: '/' 
		} @>
		<@ foreach in pagelist @>
			<li class="navbar-item
				border-b-4 border-transparent text-xl transition duration-200 ease-in-out hover:border-svj-primary focus:border-svj-primary">
				<a class="text-slate-400 hover:text-black focus:text-black" href="@{ :origUrl }">
					<@ if @{ navigation_title } @>
						@{ navigation_title }
					<@ else @>
						@{ title }
					<@ end @>					
				</a>
			</li>
		<@ end @> -->
	</ul>
</nav>