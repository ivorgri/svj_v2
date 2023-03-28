function toggleMenu(openMobileMenu) {
    openMobileMenu = !openMobileMenu;
    toggleMobileMenuOpenMenu = document.getElementById('toggle-mobile-open-menu');
    toggleMobileMenuCloseMenu = document.getElementById('toggle-mobile-close-menu');
    navBar = document.getElementById('navbar');
    if (openMobileMenu) {
        toggleMobileMenuCloseMenu.classList.add('block');
        toggleMobileMenuCloseMenu.classList.remove('hidden');
        toggleMobileMenuOpenMenu.classList.add('hidden');
        toggleMobileMenuOpenMenu.classList.remove('block');
        navBar.classList.remove('hidden');
        navBar.classList.add('flex');
    } else {
        toggleMobileMenuOpenMenu.classList.add('block');
        toggleMobileMenuOpenMenu.classList.remove('hidden');
        toggleMobileMenuCloseMenu.classList.add('hidden');
        toggleMobileMenuCloseMenu.classList.remove('block');
        navBar.classList.add('hidden');
        navBar.classList.remove('flex');
    }
    return openMobileMenu;
}

function toggleMenuResize(previousInnerWidth) {
    const mdBreakpoint = 768;
    const currentInnerWidth = window.innerWidth;
    if (previousInnerWidth < mdBreakpoint && currentInnerWidth >= mdBreakpoint) {
        return [false,window.innerWidth];
    } else if (previousInnerWidth >= mdBreakpoint && currentInnerWidth < mdBreakpoint) {
        return [true,window.innerWidth];
    } else if (currentInnerWidth >= mdBreakpoint) {
        return [false,window.innerWidth];
    } else {
        return [true,window.innerWidth];
    }
}

(function() {
    let openMobileMenu = false;
    toggleMobileMenuButton = document.getElementById('toggle-mobile-menu');
    navBarItems = document.getElementsByClassName('navbar-item');

    toggleMobileMenuButton.addEventListener("click", () => {
        openMobileMenu = toggleMenu(openMobileMenu);
    });

    for(let index = 0; index < navBarItems.length; index++) {
        navBarItem = navBarItems[index];
        navBarItem.addEventListener("click", () => {
            openMobileMenu = toggleMenu(openMobileMenu);
        });
    }

    let previousInnerWidth = 0;
    window.addEventListener("resize", () => {
        [openMobileMenu,previousInnerWidth] = toggleMenuResize(previousInnerWidth);
        openMobileMenu = toggleMenu(openMobileMenu);
    });
})();