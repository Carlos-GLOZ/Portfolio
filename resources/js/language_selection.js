const languageSelectorCurrent = document.getElementById('language-selector-current')
const languageSelectorList = document.getElementById('language-selector-list')
const languageSelectorOptions = document.getElementsByClassName('language-selector-option')

// Show language selector
languageSelectorCurrent.addEventListener('click', (e) => {
    if (languageSelectorList.dataset.hidden == 'true') {
        languageSelectorList.style.display = 'block';
        languageSelectorList.dataset.hidden = 'false';
    } else {
        languageSelectorList.style.display = 'none';
        languageSelectorList.dataset.hidden = 'true';
    }
})

// Change language when clicking on a different one
for (let i = 0; i < languageSelectorOptions.length; i++) {
    const languageOption = languageSelectorOptions[i];
    
    languageOption.addEventListener('click', (e) => {
        window.location = languageOption.dataset.lang;
    });
}

// Hide languge selector when clicking anywhere on page while it's out
document.addEventListener('click', (e) => {
    if (!languageSelectorCurrent.contains(e.target) && !languageSelectorList.contains(e.target)) {
        languageSelectorList.style.display = 'none';
        languageSelectorList.dataset.hidden = 'true';
    }
})