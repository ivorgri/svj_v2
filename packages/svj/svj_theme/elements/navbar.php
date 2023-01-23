<nav
	id="navbar" role="navigation" aria-label="main navigation"
    class="bg-white fixed z-20 items-center justify-end h-screen w-screen hidden p-6">
	<ul class="flex flex-col items-end">
        <li class="cursor-pointer no-underline text-3xl hover:opacity-30 focus:opacity-30 p-6">
            <a class="menu-item-primary menu-item-has-children" href="#">
                Supervisors >
            </a>
        </li>
        <ul class="flex-col items-start flex">
            <li class="cursor-pointer no-underline text-3xl hover:opacity-30 focus:opacity-30 hidden p-6">
                <button class="menu-item-secondary secondary-menu-back-button"> < Back</button>
            </li>
            <li class="cursor-pointer no-underline text-3xl hover:opacity-30 focus:opacity-30 hidden p-6">
                <a class="menu-item-secondary" href="#">Seline</a>
            </li>
            <li class="cursor-pointer no-underline text-3xl hover:opacity-30 focus:opacity-30 hidden p-6">
                <a class="menu-item-secondary" href="#">Fransje</a>
            </li>
        </ul>
        <li class="cursor-pointer no-underline text-3xl hover:opacity-30 focus:opacity-30 p-6">
            <a class="menu-item-primary" href="#">
                Aanbod
            </a>
        </li>
        <li class="cursor-pointer no-underline text-3xl hover:opacity-30 focus:opacity-30 p-6">
            <a class="menu-item-primary menu-item-has-children" href="#">
                Scholing >
            </a>
        </li>
        <ul class="flex-col items-start flex">
            <li class="cursor-pointer no-underline text-3xl hover:opacity-30 focus:opacity-30 hidden p-6">
                <button class="menu-item-secondary secondary-menu-back-button"> < Back</button>
            </li>
            <li class="cursor-pointer no-underline text-3xl hover:opacity-30 focus:opacity-30 hidden p-6">
                <a class="menu-item-secondary" href="#">vGCT</a>
            </li>
            <li class="cursor-pointer no-underline text-3xl hover:opacity-30 focus:opacity-30 hidden p-6">
                <a class="menu-item-secondary" href="#">GZ</a>
            </li>
        </ul>
	</ul>
</nav>
<button 
    id="toggle-menu"
    type="button"
	aria-label="Open/close menu"
    class="fixed bottom-0 right-0 p-1 z-30">
    <span id="toggle-menu-open">Menu <></span>
    <span id="toggle-menu-close" class="hidden">Close X</span>
</button>