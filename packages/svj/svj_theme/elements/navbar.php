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
			<@ if @{ :origUrl } = "/your-supervisors" @>
				<li class="navbar-item
					text-xl transition duration-200 ease-in-out text-slate-400 hover:text-black focus:text-black group flex flex-row">
					<a class="hover:border-svj-primary focus:border-svj-primary border-b-4 border-transparent " href="@{ :origUrl }">
						<@ if @{ navigation_title } @>
							@{ navigation_title }
						<@ else @>
							@{ title }
						<@ end @>					
					</a>
					<a id="menu-next-link" class="flex justify-center items-center w-12 text-lg font-revicons transition duration-200 ease-in-out border-b-4 border-transparent" href="#">
						&#59429;
					</a>
					<div class="absolute p-6 bg-white hidden md:group-hover:block drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] z-30 shadow-svj-primary">
						<ul class="flex flex-col gap-6 ">
						<@ newPagelist { 
							type: 'children', 
							context: '@{ :origUrl }' 
						} @>
						<@ foreach in pagelist @>
							<li class="navbar-item
								border-b-4 border-transparent text-slate-400 hover:text-black focus:text-black text-xl transition duration-200 ease-in-out hover:border-svj-primary focus:border-svj-primary">
								<a class=" " href="@{ :origUrl }">
									<@ if @{ navigation_title } @>
										@{ navigation_title }
									<@ else @>
										@{ title }
									<@ end @>					
								</a>
							</li>
						<@ end @>
						</ul>
					</div>
				</li>
				
			<@ else @>
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
		<@ end @>
	</ul>
</nav>