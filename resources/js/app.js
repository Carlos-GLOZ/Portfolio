import './bootstrap';

const menu = document.getElementById('menu');

const menuItems = document.getElementsByClassName('menu-item');
const menuItem1 = document.getElementById('menu-item-1');
const menuItem2 = document.getElementById('menu-item-2');
const menuItem3 = document.getElementById('menu-item-3');

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

/**
 * MENU -----------------------------------
 */
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
    document.getElementsByTagName('html')[0].style.scrollBehavior = 'auto';
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

/**
 * SECTIONS VISIBILITY
 */
const projects = document.getElementById('projects');
const skills = document.getElementById('skills');
const contact = document.getElementById('contact');

const projectCardContainers = projects.getElementsByClassName('project-card-container');
const cards = skills.getElementsByClassName('card');

function isScrolledIntoView(elem, offset = 0)
{
    const viewportHeight = window.innerHeight;
    
    if ((elem.getBoundingClientRect().top + offset) < viewportHeight) {
        return true;
    }
}

function toggleSkills(show = true) {
    if (show && skills.dataset.isshown == 'false') {
        for (let i = 0; i < cards.length; i++) {
            const card = cards[i];
            
            setTimeout((e) => {
                card.style.opacity = '1';
            }, 100 * i);
        }

        skills.dataset.isshown = 'true'
    } else if (!show && skills.dataset.isshown == 'true') {
        for (let i = 0; i < cards.length; i++) {
            const card = cards[i];
            
            card.style.opacity = '0';
        }
        skills.dataset.isshown = 'false'
    }
}

function toggleProjects(show = true) {
    if (show && projects.dataset.isshown == 'false') {
        for (let i = 0; i < projectCardContainers.length; i++) {
            const projectCardContainer = projectCardContainers[i];
            
            setTimeout((e) => {
                projectCardContainer.style.opacity = '1';
            }, 200 * i);
            
        }

        projects.dataset.isshown = 'true'
    } else if (!show && projects.dataset.isshown == 'true') {
        for (let i = 0; i < projectCardContainers.length; i++) {
            const projectCardContainer = projectCardContainers[i];
            
            setTimeout((e) => {
                projectCardContainer.style.opacity = '0';
            }, 200 * i);
            
        }

        projects.dataset.isshown = 'false'
    }
}

document.addEventListener('scroll', (e) => {

    if (isScrolledIntoView(projects, 400)) {
        toggleProjects();
    } else {
        toggleProjects(false);
    }

    if (isScrolledIntoView(skills, 200)) {
        toggleSkills();
    } else {
        toggleSkills(false);
    }
    
    if (isScrolledIntoView(contact)) {
        // toggleContact();
    } else {
        // toggleContact(false);
    }
});