const projectCardContainers = document.getElementsByClassName('project-card-container');

function toggleCard(toggleOn, projectCard, closeCardButton, projectShowcase) {
    const cardTransitionDuration = parseFloat(getComputedStyle(projectCard).transitionDuration) * 1000; // transition duration set to card in ms
    const buttonTransitionDuration = parseFloat(getComputedStyle(closeCardButton).transitionDuration) * 1000; // transition duration set to card in ms

    if (toggleOn) {
        projectCard.style.width = '80%';
        
        // Show close button
        setTimeout((e) => {
            closeCardButton.style.position = 'relative';
            closeCardButton.style.opacity = '1';
        }, cardTransitionDuration)

        // Show product showcase (without delay)
        projectShowcase.style.height = '760px';
        projectShowcase.style.opacity = '1';

    } else {
        closeCardButton.style.opacity = '0';
        
        // Hide close button
        setTimeout((e) => {
            closeCardButton.style.position = 'absolute';
            projectCard.style.width = '';
        }, buttonTransitionDuration + 10)

        // Close product showcase (with delay)
        setTimeout((e) => {
            projectShowcase.style.opacity = '0';
            projectShowcase.style.height = '0px';
        }, buttonTransitionDuration)

    }
}

function disableAllProjectCards(except = ['0']) {
    for (let i = 0; i < projectCardContainers.length; i++) {
        const cardContainer = projectCardContainers[i];

        const cardno = cardContainer.dataset.projectcardno;

        console.log(except.includes(cardContainer.dataset.projectcardno));

        // Skip cards 
        if (except.includes(cardContainer.dataset.projectcardno)) {
            continue;
        }
    
        const projectCard = cardContainer.getElementsByClassName('project-card')[0];
        const closCardButton = cardContainer.getElementsByClassName('close-card-button')[0];
        const projectShowcase = cardContainer.parentElement.getElementsByClassName('project-showcase')[0];

        toggleCard(false, projectCard, closCardButton, projectShowcase)

        cardContainer.dataset.isactive = 'false';
    }

    return true;
}

for (let i = 0; i < projectCardContainers.length; i++) {
    const cardContainer = projectCardContainers[i];

    const projectCard = cardContainer.getElementsByClassName('project-card')[0];
    const closCardButton = cardContainer.getElementsByClassName('close-card-button')[0];
    const projectShowcase = cardContainer.parentElement.getElementsByClassName('project-showcase')[0];
    
    projectCard.addEventListener('click', (e) => {
        if (cardContainer.dataset.isactive == 'false') {
            // Disable all active cards
            disableAllProjectCards([cardContainer.dataset.projectcardno]);

            toggleCard(true, projectCard, closCardButton, projectShowcase);
            
            cardContainer.dataset.isactive = 'true';
        } else {
            toggleCard(false, projectCard, closCardButton, projectShowcase)

            cardContainer.dataset.isactive = 'false';
        }
    })
}