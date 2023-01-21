<nav
	id="navbar" role="navigation" aria-label="main navigation"
    class="items-center h-screen w-screen hidden">
	<ul class="flex flex-col items-start">
        <li class="cursor-pointer no-underline text-3xl p-2 transition duration-500 hover:opacity-0 focus:opacity-0 opacity-0 -translate-x-full hidden">
            <a class="menu-item-primary menu-item-has-children" href="#">
                Supervisors >
            </a>
        </li>
        <ul class="flex-col items-start flex">
            <li class="cursor-pointer no-underline text-3xl p-2 transition duration-500 hover:opacity-0 focus:opacity-0 -translate-x-full hidden">
                <button class="menu-item-secondary secondary-menu-back-button"> < Back</button>
            </li>
            <li class="cursor-pointer no-underline text-3xl p-2 transition duration-500 hover:opacity-0 focus:opacity-0 -translate-x-full hidden">
                <a class="menu-item-secondary" href="#">Seline</a>
            </li>
            <li class="cursor-pointer no-underline text-3xl p-2 transition duration-500 hover:opacity-0 focus:opacity-0 -translate-x-full hidden">
                <a class="menu-item-secondary" href="#">Fransje</a>
            </li>
        </ul>
        <li class="cursor-pointer no-underline text-3xl p-2 transition duration-500 hover:opacity-0 focus:opacity-0 -translate-x-full opacity-0 hidden">
            <a class="menu-item-primary" href="#">
                Aanbod
            </a>
        </li>
        <li class="cursor-pointer no-underline text-3xl p-2 transition duration-500 hover:opacity-0 focus:opacity-0 -translate-x-full opacity-0 hidden">
            <a class="menu-item-primary" href="#">
                Scholing
            </a>
        </li>
	</ul>
</nav>
<button 
    id="toggle-menu"
    type="button"
	aria-label="Open/close menu"
    class="fixed bottom-[5%] right-[5%]">
    <span id="toggle-menu-open">Menu <></span>
    <span id="toggle-menu-close" class="hidden">Close X</span>
</button>