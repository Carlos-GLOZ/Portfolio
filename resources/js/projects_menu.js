const projectCardContainers = document.getElementsByClassName('project-card-container');

function toggleCard(toggleOn, projectCard, projectShowcase, projectInfo) {
    const cardTransitionDuration = parseFloat(getComputedStyle(projectCard).transitionDuration) * 1000; // transition duration set to card in ms
    const infoTransitionDuration = parseFloat(getComputedStyle(projectInfo).transitionDuration) * 1000; // transition duration set to project info in ms

    const projectShowcaseTargetHeight = getComputedStyle(projectShowcase).maxHeight;

    if (toggleOn) {
        projectShowcase.style.height = projectShowcaseTargetHeight;
        projectShowcase.style.opacity = '1';
        
        projectInfo.style.display = 'flex';

        setTimeout((e) => {
            projectInfo.style.opacity = '1';
        }, cardTransitionDuration);

    } else {
        projectInfo.style.opacity = '0';
        
        
        setTimeout((e) => {
            projectInfo.style.display = 'none';
            projectShowcase.style.opacity = '0';
            projectShowcase.style.height = '0px';
        }, infoTransitionDuration);
    }
}

/**
 * 
 * @param {Array} except The cards IDs to ignore 
 * @returns
 */

function disableAllProjectCards(except = ['0']) {
    for (let i = 0; i < projectCardContainers.length; i++) {
        const cardContainer = projectCardContainers[i];

        const cardno = cardContainer.dataset.projectcardno;

        // Skip cards 
        if (except.includes(cardno)) {
            
            continue;
        }

        const projectShowcase = cardContainer.getElementsByClassName('project-card-showcase')[0];
        const projectInfo = cardContainer.getElementsByClassName('project-showcase-info')[0];

        toggleCard(false, cardContainer, projectShowcase, projectInfo)

        cardContainer.dataset.isactive = 'false';
    }

    return true;
}

for (let i = 0; i < projectCardContainers.length; i++) {
    const cardContainer = projectCardContainers[i];

    const projectShowcase = cardContainer.getElementsByClassName('project-card-showcase')[0];
    const projectClickable = cardContainer.getElementsByClassName('project-card-clickable')[0];
    const projectInfo = cardContainer.getElementsByClassName('project-showcase-info')[0];
    
    projectClickable.addEventListener('click', (e) => {

        if (cardContainer.dataset.isactive == 'false') {
            // Disable all active cards
            disableAllProjectCards([cardContainer.dataset.projectcardno]);

            toggleCard(true, cardContainer, projectShowcase, projectInfo);
            
            cardContainer.dataset.isactive = 'true';
        } else {
            toggleCard(false, cardContainer, projectShowcase, projectInfo)

            cardContainer.dataset.isactive = 'false';
        }
    })
}