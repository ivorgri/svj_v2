function toggleMenu(openMenu,toggleHiddenDelay) {
    return new Promise((resolve,reject) => {
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
        setTimeout(() => {
            resolve(openMenu);
        },toggleHiddenDelay)   
    })
}

async function hideVisibleMenuItems(visibleMenuItems,toggleHiddenDelay) {
    return new Promise((resolve,reject) => {
        for(let index = 0; index < visibleMenuItems.length; index++) {
            let visibleMenuItem = visibleMenuItems[index];
            visibleMenuItemParentListItem = visibleMenuItem.parentElement;
            visibleMenuItemParentListItem.classList.add('hidden')        
            visibleMenuItemParentListItem.classList.remove('block')
        }
        setTimeout(() => {
            resolve("hidden old items")
        },toggleHiddenDelay)
    })
}

async function showHiddenMenuItems(hiddenMenuItems,toggleHiddenDelay) {
    return new Promise((resolve,reject) => {
        for(let index = 0; index < hiddenMenuItems.length; index++) {
            let hiddenMenuItem = hiddenMenuItems[index];
            hiddenMenuItemParentListItem = hiddenMenuItem.parentElement;
            hiddenMenuItemParentListItem.classList.add('block')
            hiddenMenuItemParentListItem.classList.remove('hidden')
        }
        setTimeout(() => {
            resolve("showing hidden menu items")
        },toggleHiddenDelay)
    })
}

async function transitionCurrentVisibleMenuItems(currentVisibleMenuItems,switchMenuItemsDelay) {
    return new Promise((resolve,reject) => {
        for(let index = 0; index < currentVisibleMenuItems.length; index++) {
            let currentVisibleMenuItem = currentVisibleMenuItems[index];
            currentVisibleMenuItemParentListItem = currentVisibleMenuItem.parentElement;

            addClassStrings = ['-translate-x-full','opacity-0','hover:opacity-0','focus:opacity-0']
            removeClassStrings = ['transform-none','opacity-100','hover:opacity-30','focus:opacity-30']
            for(let index = 0; index < addClassStrings.length; index++) {
                currentVisibleMenuItemParentListItem.classList.add(addClassStrings[index])
            }
            
            for(let index = 0; index < removeClassStrings.length; index++) {
                currentVisibleMenuItemParentListItem.classList.remove(removeClassStrings[index])   
            }
        }
        setTimeout(() => {
            resolve("done transitioning")
        },switchMenuItemsDelay);
    })  
}

async function transitionNewVisibleMenuItems(newVisibleMenuItems,switchMenuItemsDelay) {
    return new Promise((resolve,reject) => {
        for(let index = 0; index < newVisibleMenuItems.length; index++) {
            let newVisibleMenuItem = newVisibleMenuItems[index];
            newVisibleMenuItemParentListItem = newVisibleMenuItem.parentElement;

            addClassStrings = ['transform-none','opacity-100','hover:opacity-30','focus:opacity-30']
            removeClassStrings = ['-translate-x-full','opacity-0','hover:opacity-0','focus:opacity-0']
            for(let index = 0; index < addClassStrings.length; index++) {
                newVisibleMenuItemParentListItem.classList.add(addClassStrings[index])
            }
            
            for(let index = 0; index < removeClassStrings.length; index++) {
                newVisibleMenuItemParentListItem.classList.remove(removeClassStrings[index])   
            }
        }
        setTimeout(() => {
            resolve("done transitioning")
        },switchMenuItemsDelay);
    })  
}

async function switchVisibleMenuItems (currentVisibleMenuItems,newVisibleMenuItems,toggleHiddenDelay,switchMenuItemsDelay) {
    return new Promise(async (resolve,reject) => {
        console.log(currentVisibleMenuItems);
        console.log(newVisibleMenuItems);
        if (currentVisibleMenuItems.length > 0 && newVisibleMenuItems.length === 0) {
            await transitionCurrentVisibleMenuItems(currentVisibleMenuItems,switchMenuItemsDelay)
            await hideVisibleMenuItems(currentVisibleMenuItems,toggleHiddenDelay);
        }
        if (currentVisibleMenuItems.length > 0 && newVisibleMenuItems.length > 0) {
            console.log("Getting here...");
            await transitionCurrentVisibleMenuItems(currentVisibleMenuItems,switchMenuItemsDelay)
            console.log("Going way to fast...");
            await hideVisibleMenuItems(currentVisibleMenuItems,toggleHiddenDelay);
            console.log("Hold it!...");
            await showHiddenMenuItems(newVisibleMenuItems,toggleHiddenDelay);
            await transitionNewVisibleMenuItems(newVisibleMenuItems,switchMenuItemsDelay);
        }
        if (currentVisibleMenuItems.length === 0 && newVisibleMenuItems.length > 0) {
            await showHiddenMenuItems(newVisibleMenuItems,toggleHiddenDelay);
            await transitionNewVisibleMenuItems(newVisibleMenuItems,switchMenuItemsDelay);
        }
        console.log("Probably getting here too quickly...");
        resolve(newVisibleMenuItems);
    })
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

(function () {
    const toggleHiddenDelay = 1;
    const switchMenuItemsDelay = 500;
    let openMenu = false;
    let visibleMenuItems = [];
    toggleMenuButton = document.getElementById('toggle-menu');
    toggleMenuButton.addEventListener("click", async () => {
        if (!openMenu) {
            openMenu = await toggleMenu(openMenu,toggleHiddenDelay);
            primaryMenuItems = document.getElementsByClassName('menu-item-primary');
            visibleMenuItems = await switchVisibleMenuItems([],primaryMenuItems,toggleHiddenDelay,switchMenuItemsDelay)
        } else {
            console.log("Closing menu, so first remove the elements!")
            visibleMenuItems = await switchVisibleMenuItems(visibleMenuItems,[],toggleHiddenDelay,switchMenuItemsDelay)
            openMenu = await toggleMenu(openMenu,toggleHiddenDelay);
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
            visibleMenuItems = await switchVisibleMenuItems(visibleMenuItems,secondaryMenuItems,toggleHiddenDelay,switchMenuItemsDelay)
        });
    }

    const secondaryMenuBackButtons = document.getElementsByClassName('secondary-menu-back-button');
    console.log(secondaryMenuBackButtons);
    for(let index = 0; index < secondaryMenuBackButtons.length; index++) {
        secondaryMenuBackButton = secondaryMenuBackButtons[index];
        secondaryMenuBackButton.addEventListener("click", (event) => {
            secondaryMenuBackButton = event.target;
            console.log(secondaryMenuBackButton);
            // secondaryMenuItems = toggleSecondaryMenu(secondaryMenu,undefined);
            // setTimeout(() => {
            //     visiblePrimaryMenuItems = togglePrimaryMenuItems(visiblePrimaryMenuItems);
            // }, slideDelay)
        })
    }
})();