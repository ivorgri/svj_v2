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

async function switchVisibleMenuItems (currentVisibleMenuItems,newVisibleMenuItems,switchMenuItemsDelay) {
    return new Promise(function(resolve) {
        currentItemsLength = currentVisibleMenuItems.length;
        newItemsLength = newVisibleMenuItems.length;

        currentVisibleMenuItemsParentListItems = [];
        for(let index = 0; index < currentVisibleMenuItems.length; index++) {
            let currentVisibleMenuItem = currentVisibleMenuItems[index];
            currentVisibleMenuItemParentListItem = currentVisibleMenuItem.parentElement;
            currentVisibleMenuItemsParentListItems.push(currentVisibleMenuItemParentListItem);
        }

        newVisibleMenuItemsParentListItems = [];
        for(let index = 0; index < newVisibleMenuItems.length; index++) {
            let newVisibleMenuItem = newVisibleMenuItems[index];
            newVisibleMenuItemParentListItem = newVisibleMenuItem.parentElement;
            newVisibleMenuItemsParentListItems.push(newVisibleMenuItemParentListItem);
        }  

        // if there is no current and new (so effectively open menu), show new THEN return new
        if (currentItemsLength === 0 && newItemsLength !== 0) {
            gsap
                .fromTo(newVisibleMenuItemsParentListItems, 
                    { xPercent: 100, opacity:0, display: 'block' }, 
                    { xPercent: 0, opacity: 1, duration: switchMenuItemsDelay,
                        clearProps: 'opacity',
                        onComplete: (resolve,newVisibleMenuItems) => {
                            console.log("Done opening menu")
                            resolve(newVisibleMenuItems)
                        },
                        onCompleteParams: [resolve,newVisibleMenuItems]
                    })
        }

        // if there is current and new (so effectively switching items), remove current THEN show new THEN return new
        if (currentItemsLength !== 0 && newItemsLength !== 0) {
            gsap
                .fromTo(currentVisibleMenuItemsParentListItems, 
                    { xPercent: 0, opacity: 1 }, 
                    { xPercent: 100, opacity:0, display: 'none', duration: switchMenuItemsDelay,
                        clearProps: 'opacity', 
                        onComplete: (resolve,newVisibleMenuItems,newVisibleMenuItemsParentListItems) => {
                            console.log("Done removing current items")
                            gsap
                            .fromTo(newVisibleMenuItemsParentListItems, 
                                { xPercent: 100, opacity: 0, display: 'block' }, 
                                { xPercent: 0, opacity:1, duration: switchMenuItemsDelay, 
                                    clearProps: 'opacity', 
                                    onComplete: (resolve,newVisibleMenuItems) => {
                                        console.log("Done showing new items")
                                        resolve(newVisibleMenuItems)
                                    },
                                    onCompleteParams: [resolve,newVisibleMenuItems]
                                })
                        },
                        onCompleteParams: [resolve,newVisibleMenuItems,newVisibleMenuItemsParentListItems]
                    })
        }

        // if there is current and no new (so effectively closing menu), remove current THEN return new
        if (currentItemsLength !== 0 && newItemsLength === 0) {
            gsap
                .fromTo(currentVisibleMenuItemsParentListItems, 
                    { xPercent: 0, opacity: 1 }, 
                    { xPercent: 100, opacity:0, display: 'none', duration: switchMenuItemsDelay,
                        clearProps: 'opacity', 
                        onComplete: (resolve,newVisibleMenuItems) => {
                            console.log("Done closing menu")
                            resolve(newVisibleMenuItems)
                        },
                        onCompleteParams: [resolve,newVisibleMenuItems]
                    })
        }
    })
}

(function () {
    const switchMenuItemsDelay = 0.5;
    let openMenu = false;
    let visibleMenuItems = [];

    primaryMenuItems = document.getElementsByClassName('menu-item-primary');

    toggleMenuButton = document.getElementById('toggle-menu');
    toggleMenuButton.addEventListener("click", async () => {
        if (!openMenu) {
            openMenu = toggleMenu(openMenu);
            visibleMenuItems = await switchVisibleMenuItems([],primaryMenuItems,switchMenuItemsDelay)
        } else {
            visibleMenuItems = await switchVisibleMenuItems(visibleMenuItems,[],switchMenuItemsDelay)
            openMenu = toggleMenu(openMenu);
        }
    });

    const menuItemsWithChildren = document.getElementsByClassName('menu-item-has-children');
    for(let index = 0; index < menuItemsWithChildren.length; index++) {
        menuItemWithChildren = menuItemsWithChildren[index];
        menuItemWithChildren.addEventListener("click", async (event) => {
            clickedMenuItemWithChildren = event.target;
            clickedMenuItemWithChildrenParentListItem = clickedMenuItemWithChildren.parentElement;
            secondaryMenuList = clickedMenuItemWithChildrenParentListItem.nextElementSibling;
            secondaryMenuItems = secondaryMenuList.getElementsByClassName('menu-item-secondary');
            visibleMenuItems = await switchVisibleMenuItems(visibleMenuItems,secondaryMenuItems,switchMenuItemsDelay)
        });
    }

    const secondaryMenuBackButtons = document.getElementsByClassName('secondary-menu-back-button');
    for(let index = 0; index < secondaryMenuBackButtons.length; index++) {
        secondaryMenuBackButton = secondaryMenuBackButtons[index];
        secondaryMenuBackButton.addEventListener("click", async (event) => {
            secondaryMenuBackButton = event.target;
            console.log(secondaryMenuBackButton);
            visibleMenuItems = await switchVisibleMenuItems(visibleMenuItems,primaryMenuItems,switchMenuItemsDelay)
        })
    }
})();