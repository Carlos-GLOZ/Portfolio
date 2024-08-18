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

const responsiveMenu = document.getElementById('responsive-menu');
const responsiveMenuOpenButton = document.getElementById('responsive-menu-open-button');
const responsiveMenuCloseButton = document.getElementById('responsive-menu-close-button');

const responsiveMenuItems = document.getElementsByClassName('responsive-menu-item');

/**
 * MENU -----------------------------------
 */
// Will return wether or not the menu is completely hidden horizontally (and the vertical version should be deployed)
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

// Deploy or retract the vertical version of the menu
function toggleVerticalMenu(retract = false) {
    if (retract) { // Close menu
        for (let i = 0; i < menuItems.length; i++) {
            const item = menuItems[i];

            item.style.borderColor = '';
            item.style.backgroundColor = '';
        }
    } else { // Open menu
        for (let i = 0; i < menuItems.length; i++) {
            const item = menuItems[i];

            item.style.borderColor = 'transparent';
            item.style.backgroundColor = 'transparent';

            item.style.transform = 'translate(-' + menuItemsInitialPos[item.id] + 'px, ' + menuItemsVerticalTransforms[item.id] + 'px)';
        }
    }
}

// Deploy or retract the full-page responsive menu
function toggleResponsiveMenu(retract = false) {
    if (retract) { // Close menu
        responsiveMenu.style.transform = "translate(-" + getComputedStyle(responsiveMenu).width + ")";
        // responsiveMenu.style.display = 'none';
        document.getElementById('main-container').style.overflow = 'auto'; // Enable overflow to restore scrolling
    } else { // Open menu
        responsiveMenu.style.display = 'flex';
        responsiveMenu.style.transform = "translate(" + getComputedStyle(responsiveMenu).width + ")";
        document.getElementById('main-container').style.overflow = 'hidden'; // Hide overflow to prevent scrolling
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
        toggleVerticalMenu();
    } else {
        toggleVerticalMenu(true);
    }
});

window.addEventListener('beforeunload', (e) => {
    document.getElementsByTagName('html')[0].style.scrollBehavior = 'auto';
    window.scrollTo({top: 0});
})

window.addEventListener('resize', (e) => {
    if (scrollY == 0) {
        menuItemsInitialPos['menu-item-1'] = menuItem1.getBoundingClientRect().left;
        menuItemsInitialPos['menu-item-2'] = menuItem2.getBoundingClientRect().left;
        menuItemsInitialPos['menu-item-3'] = menuItem3.getBoundingClientRect().left;
    }
})

window.addEventListener('load', (e) => {
    // Offset responsive menu
    responsiveMenu.style.left = "-" + getComputedStyle(responsiveMenu).width;
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

// Event listeners for responsive menu buttons
responsiveMenuOpenButton.addEventListener('click', (e) => {
    e.preventDefault();

    toggleResponsiveMenu();
})

responsiveMenuCloseButton.addEventListener('click', (e) => {
    e.preventDefault();

    toggleResponsiveMenu(true);
})

for (let i = 0; i < responsiveMenuItems.length; i++) {
    const item = responsiveMenuItems[i];

    const itemLink = item.getElementsByTagName('a')[0];

    item.addEventListener('click', (e) => {
        toggleResponsiveMenu(true);
    });
}

/**
 * SECTIONS VISIBILITY -----------------------------------
 */
const projects = document.getElementById('projects');
const skills = document.getElementById('skills');
const contact = document.getElementById('contact');

const projectCardContainers = projects.getElementsByClassName('project-card-container');
const cards = skills.getElementsByClassName('card');
const contactStaggerItems = contact.getElementsByClassName('contact-stagger-item');

const projectShowcase = document.getElementById('project-showcase');

function isScrolledIntoView(elem, offset = 0)
{
    const viewportHeight = window.innerHeight;
    
    if ((elem.getBoundingClientRect().top + offset) < viewportHeight) {
        return true;
    }
}

function toggleSkills(show = true) {
    const sectionTitle = skills.getElementsByClassName('section-title');
    const skillsSectionAnimationShowcaseIterables = Array.from(sectionTitle).concat(Array.from(cards)); // The items to iterate over and slowly reveal

    
    if (show && skills.dataset.isshown == 'false') {
        for (let i = 0; i < skillsSectionAnimationShowcaseIterables.length; i++) {
            const card = skillsSectionAnimationShowcaseIterables[i];
            
            setTimeout((e) => {
                card.style.opacity = '1';
            }, 100 * i);
        }

        skills.dataset.isshown = 'true'
    } else if (!show && skills.dataset.isshown == 'true') {
        for (let i = 0; i < skillsSectionAnimationShowcaseIterables.length; i++) {
            const card = skillsSectionAnimationShowcaseIterables[i];
            
            card.style.opacity = '0';
        }
        skills.dataset.isshown = 'false'
    }
}

function toggleProjects(show = true) {
    const sectionTitle = projects.getElementsByClassName('section-title');
    const projectsSectionAnimationShowcaseIterables = Array.from(sectionTitle).concat(Array.from(projectCardContainers)); // The items to iterate over and slowly reveal

    if (show && projects.dataset.isshown == 'false') { // Show projects section
        for (let i = 0; i < projectsSectionAnimationShowcaseIterables.length; i++) {
            const projectCardContainer = projectsSectionAnimationShowcaseIterables[i];
            
            setTimeout((e) => {
                projectCardContainer.style.opacity = '1';
            }, 200 * i);
            
        }

        projectShowcase.style.opacity = '1';

        projects.dataset.isshown = 'true'
    } else if (!show && projects.dataset.isshown == 'true') { // Hide projects section
        for (let i = 0; i < projectsSectionAnimationShowcaseIterables.length; i++) {
            const projectCardContainer = projectsSectionAnimationShowcaseIterables[i];
            
            projectCardContainer.style.opacity = '0';
            // setTimeout((e) => {
            // }, 200 * i);
            
        }

        projectShowcase.style.opacity = '0';

        projects.dataset.isshown = 'false'
    }
}

function toggleContact(show = true) {
    const sectionTitle = contact.getElementsByClassName('section-title');
    const contactsSectionAnimationShowcaseIterables = Array.from(sectionTitle).concat(Array.from(contactStaggerItems)); // The items to iterate over and slowly reveal

    if (show && contact.dataset.isshown == 'false') {
        for (let i = 0; i < contactsSectionAnimationShowcaseIterables.length; i++) {
            const contactStaggerItem = contactsSectionAnimationShowcaseIterables[i];
            
            setTimeout((e) => {
                contactStaggerItem.style.opacity = '1';
            }, 200 * i);
            
        }

        contact.dataset.isshown = 'true'
    } else if (!show && contact.dataset.isshown == 'true') {
        for (let i = 0; i < contactsSectionAnimationShowcaseIterables.length; i++) {
            const contactStaggerItem = contactsSectionAnimationShowcaseIterables[i];
            
            contactStaggerItem.style.opacity = '0';
            // setTimeout((e) => {
            // }, 200 * i);
            
        }

        contact.dataset.isshown = 'false'
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
        toggleContact();
    } else {
        toggleContact(false);
    }
});