import './bootstrap';

const menu = document.getElementById('menu');

const menuItems = document.getElementsByClassName('menu-item');
const menuItem1 = document.getElementById('menu-item-1');
const menuItem2 = document.getElementById('menu-item-2');
const menuItem3 = document.getElementById('menu-item-3');

const menuItemsLeftmostPos = {
    'menu-item-1': null,
    'menu-item-2': null,
    'menu-item-3': null,
}

const menuItemsInitialPos = {
    'menu-item-1': menuItem1.getBoundingClientRect().left,
    'menu-item-2': menuItem2.getBoundingClientRect().left,
    'menu-item-3': menuItem3.getBoundingClientRect().left,
}

const menuItemsVerticalTransforms = {
    'menu-item-1': 0,
    'menu-item-2': 100,
    'menu-item-3': 200,
}

// Will return wether or not the menu is completely hidden
function updateMenuPos() {
    // Move menu elements
    for (let i = 0; i < menuItems.length; i++) {
        const item = menuItems[i];       

        if (scrollY < 500) {
            const leftTransform = menuItemsInitialPos[item.id] * (scrollY / 500);
            item.style.transform = 'translate(-' + leftTransform + 'px)';
        } else {
            return true;
        }
    }

    return false;
}

function deployVerticalMenu(retract = false) {
    if (retract) {
        for (let i = 0; i < menuItems.length; i++) {
            const item = menuItems[i];

            item.style.borderColor = '';
        }
    } else {
        for (let i = 0; i < menuItems.length; i++) {
            const item = menuItems[i];

            item.style.borderColor = 'transparent';

            item.style.transform = 'translate(-' + menuItemsInitialPos[item.id] + 'px, ' + menuItemsVerticalTransforms[item.id] + 'px)';
        }
    }
}

function resetMenuItemsStyles() {
    // Menu Item 1
    menuItem1.style.borderColor = ''
    
    // Menu Item 1
    menuItem1.style.borderColor = ''
    
    // Menu Item 1
    menuItem1.style.borderColor = ''
}

function highlightMenuItem(highlightItem = null) {
    for (let i = 0; i < menuItems.length; i++) {
        const item = menuItems[i];

        if (highlightItem == null) {
            item.style.opacity = '';
            continue;
        }
        
        if (item.id != highlightItem.id) {
            item.style.opacity = '0.5';
        }
    }
}

document.addEventListener('scroll', (e) => {
    if (updateMenuPos()) {
        deployVerticalMenu();
    } else {
        deployVerticalMenu(true);
    }
});

window.addEventListener('beforeunload', (e) => {
   window.scrollTo({top: 0});
})

// Event listeneres for menu item highlights
for (let i = 0; i < menuItems.length; i++) {
    const item = menuItems[i];
    
    item.addEventListener('mouseover', (e) => {
        highlightMenuItem(item);
    })

    item.addEventListener('mouseout', (e) => {
        highlightMenuItem()
    })
}