<nav id="navbar" class="navbar fixed pb-1 md:h-full flex-col items-center w-full uppercase col-span-4 justify-end
		md:flex md:relative
		xl:col-span-2" role="navigation" aria-label="main navigation">
	<@ newPagelist { 
		type: 'children', 
		context: '/' 
	} @>
	<div class="navbar-start">
    	<div aria-label="Open/sluit mobiel menu"
			class="dropdown inline-flex items-center justify-center p-2 rounded-full text-white z-20 bg-svj-secondary
			focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white
			fixed bottom-[5%] right-[5%]
			md:invisible">
      		<label tabindex="0" class="btn btn-ghost lg:hidden">
        		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      		</label>
      		<ul tabindex="0" class="menu menu-compact dropdown-content p-2 rounded-box w-[50vw] absolute right-0 bottom-0 text-slate-400 bg-white shadow-2xl ">
			  	<li class="flex flew-row justify-center">
					<a class="text-xl self-end w-full flex justify-end text-end active:bg-svj-primary" href="/">
						Home
					</a>
				</li>
			  	<@ foreach in pagelist @>
					<@ newPagelist { 
						type: 'children', 
						context: '@{ :origUrl }' 
					} @>
					<li class="flex flew-row justify-center">
						<a class="text-xl self-end w-full flex justify-end text-end	active:bg-svj-primary" href="@{ :origUrl }">
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
	</div>
	<!-- DESKTOP MENU -->
	<div class="navbar-center hidden md:flex">
		<@ newPagelist { 
			type: 'children', 
			context: '/' 
		} @>
		<ul class="menu menu-horizontal px-1">
			<li>
				<a class="hover:bg-svj-secondary focus:bg-svj-secondary" href="/">
					Home
				</a>
			</li>
			<@ foreach in pagelist @>
				<@ newPagelist { 
					type: 'children', 
					context: '@{ :origUrl }' 
				} @>
				<@ if @{ :pagelistDisplayCount } > 0 @>
					<li tabindex="0">
						<a class="hover:bg-svj-secondary focus:bg-svj-secondary" href="@{ :origUrl }">
							<@ if @{ navigation_title } @>
								@{ navigation_title }
							<@ else @>
								@{ title }
							<@ end @>
							<svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
						</a>
						<@ newPagelist { 
							type: 'children', 
							context: '@{ :origUrl }' 
						} @>
						<ul class="p-2 shadow-2xl">
							<@ foreach in pagelist @>
								<li class="bg-white">
									<a class="hover:bg-svj-secondary focus:bg-svj-secondary" href="@{ :origUrl }">
										<@ if @{ navigation_title } @>
											@{ navigation_title }
										<@ else @>
											@{ title }
										<@ end @>
									</a>
								</li>
							<@ end @>
						</ul>
					</li>
				<@ else @>
					<li>
						<a class="hover:bg-svj-secondary focus:bg-svj-secondary" href="@{ :origUrl }">
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
  	</div>
</nav>