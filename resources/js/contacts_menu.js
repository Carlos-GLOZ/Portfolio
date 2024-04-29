const contactLinks = document.getElementsByClassName('contact-link');
const contactShowcaseImages = document.getElementsByClassName('contact-showcase-image');

for (let i = 0; i < contactLinks.length; i++) {
    const contactLink = contactLinks[i];

    if (contactLink.dataset.contactindex != '0') { // Skip contact links with a contact index of '0'
        contactLink.addEventListener('mouseover', (e) => {
            for (let j = 0; j < contactShowcaseImages.length; j++) {
                const contactShowcaseImage = contactShowcaseImages[j];
                
                // Show the contact showcase with the same contact index and hide all others
                if (contactShowcaseImage.dataset.contactindex == contactLink.dataset.contactindex) {
                    contactShowcaseImage.style.opacity = '1';
                } else {
                    contactShowcaseImage.style.opacity = '0';
                }
            }
        });
    }
    
}