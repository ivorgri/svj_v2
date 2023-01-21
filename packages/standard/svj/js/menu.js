function toggleMenu(openMenu) {
    openMenu = !openMenu;
    toggleMenuOpenSpan = document.getElementById('toggle-menu-open');
    toggleMenuCloseSpan = document.getElementById('toggle-menu-close');
    navBar = document.getElementById('navbar');
    if (openMenu) {
        toggleMenuCloseSpan.classList.add('block');
        toggleMenuCloseSpan.classList.remove('hidden');
        toggleMenuOpenSpan.classList.add('hidden');
        toggleMenuOpenSpan.classList.remove('block');
        navBar.classList.remove('hidden');
        navBar.classList.add('flex');
    } else {
        toggleMenuOpenSpan.classList.add('block');
        toggleMenuOpenSpan.classList.remove('hidden');
        toggleMenuCloseSpan.classList.add('hidden');
        toggleMenuCloseSpan.classList.remove('block');
        navBar.classList.add('hidden');
        navBar.classList.remove('flex');
    }
    return openMenu;
}

function togglePrimaryMenuItems(visiblePrimaryMenuItems) {
    primaryMenuItems = document.getElementsByClassName('menu-item-primary');
    visiblePrimaryMenuItems = !visiblePrimaryMenuItems;
    let addClassStrings = [];
    let removeClassStrings = [];
    if (visiblePrimaryMenuItems) {
        // addClassStrings = ['opacity-100','hover:opacity-30','focus:opacity-30'];
        addClassStrings = ['transform-none','opacity-100','hover:opacity-30','focus:opacity-30']
        // removeClassStrings = ['opacity-0','hover:opacity-0','focus:opacity-0'];
        removeClassStrings = ['-translate-x-full','opacity-0','hover:opacity-0','focus:opacity-0']
    } else {
        // addClassStrings = ['opacity-0','hover:opacity-0','focus:opacity-0'];
        addClassStrings = ['-translate-x-full','opacity-0','hover:opacity-0','focus:opacity-0']
        // removeClassStrings = ['opacity-100','hover:opacity-30','focus:opacity-30'];
        removeClassStrings = ['transform-none','opacity-100','hover:opacity-30','focus:opacity-30']
    }
    for(let index = 0; index < primaryMenuItems.length; index++) {
        primaryMenuItem = primaryMenuItems[index];
        primaryMenuItemParentListItem = primaryMenuItem.parentElement;
        for(let index = 0; index < addClassStrings.length; index++) {
            primaryMenuItemParentListItem.classList.add(addClassStrings[index])
        }
        
        for(let index = 0; index < removeClassStrings.length; index++) {
            primaryMenuItemParentListItem.classList.remove(removeClassStrings[index])   
        }
    }
    return visiblePrimaryMenuItems;
}

function toggleSecondaryMenu(currentSecundaryMenu,newSecundaryMenu) {
    let secondaryMenuItems = [];
    let secondaryMenuBackButton = undefined;
    let addClassStrings = [];
    let removeClassStrings = [];
    if (currentSecundaryMenu) {
        // currentSecundaryMenu.classList.add("hidden");
        // currentSecundaryMenu.classList.remove("flex");
        secondaryMenuItems = currentSecundaryMenu.getElementsByClassName('menu-item-secondary');
        secondaryMenuBackButton = currentSecundaryMenu.getElementsByClassName('secondary-menu-back-button')[0];
        addClassStrings = ['opacity-0','-translate-x-full'];
        removeClassStrings = ['opacity-100','translate-none'];
    }
    if (newSecundaryMenu) {
        // newSecundaryMenu.classList.add("flex");
        // newSecundaryMenu.classList.remove("hidden");
        secondaryMenuItems = newSecundaryMenu.getElementsByClassName('menu-item-secondary');
        secondaryMenuBackButton = newSecundaryMenu.getElementsByClassName('secondary-menu-back-button')[0];
        addClassStrings = ['opacity-100','translate-none'];
        removeClassStrings = ['opacity-0','-translate-x-full'];
    }
    if (secondaryMenuItems) {
        for(let index = 0; index < secondaryMenuItems.length; index++) {
            secondaryMenuItem = secondaryMenuItems[index];
            secondaryMenuItemParentListItem = secondaryMenuItem.parentElement;
            for(let index = 0; index < addClassStrings.length; index++) {
                secondaryMenuItemParentListItem.classList.add(addClassStrings[index])
            }
            
            for(let index = 0; index < removeClassStrings.length; index++) {
                secondaryMenuItemParentListItem.classList.remove(removeClassStrings[index])   
            }
        }
    }
    if (secondaryMenuBackButton) {
        let secondaryMenuBackButtonParentListItem = secondaryMenuBackButton.parentElement; 
        for(let index = 0; index < addClassStrings.length; index++) {
            secondaryMenuBackButtonParentListItem.classList.add(addClassStrings[index])
        }
        
        for(let index = 0; index < removeClassStrings.length; index++) {
            secondaryMenuBackButtonParentListItem.classList.remove(removeClassStrings[index])   
        }
    }
    return newSecundaryMenu;
}

(function() {
    const slideDelay = 1000;
    let openMenu = false;
    let visiblePrimaryMenuItems = true;
    let secondaryMenu;
    let secondaryMenuBackButtons = document.getElementsByClassName('secondary-menu-back-button');
    toggleMenuButton = document.getElementById('toggle-menu');
    menuItemsWithChildren = document.getElementsByClassName('menu-item-has-children');

    toggleMenuButton.addEventListener("click", () => {
        openMenu = toggleMenu(openMenu);
        if (openMenu) {
            visiblePrimaryMenuItems = togglePrimaryMenuItems(false);
            secondaryMenu = toggleSecondaryMenu(secondaryMenu,undefined);
        }
    });

    for(let index = 0; index < menuItemsWithChildren.length; index++) {
        menuItemWithChildren = menuItemsWithChildren[index];
        menuItemWithChildren.addEventListener("click", (event) => {
            clickedMenuItemWithChildren = event.target;
            clickedMenuItemWithChildrenParentListItem = clickedMenuItemWithChildren.parentElement;
            visiblePrimaryMenuItems = togglePrimaryMenuItems(visiblePrimaryMenuItems);
            console.log(clickedMenuItemWithChildrenParentListItem);
            setTimeout(() => {
                secondaryMenu = toggleSecondaryMenu(secondaryMenu,clickedMenuItemWithChildrenParentListItem.nextElementSibling);
            }, slideDelay)
        });
    }

    for(let index = 0; index < secondaryMenuBackButtons.length; index++) {
        secondaryMenuBackButton = secondaryMenuBackButtons[index];
        secondaryMenuBackButton.addEventListener("click", () => {
            secondaryMenu = toggleSecondaryMenu(secondaryMenu,undefined);
            setTimeout(() => {
                visiblePrimaryMenuItems = togglePrimaryMenuItems(visiblePrimaryMenuItems);
            }, slideDelay)
        })
    }
})();