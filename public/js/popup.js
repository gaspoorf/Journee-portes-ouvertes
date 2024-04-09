document.querySelectorAll('.popup-overlay').forEach(popupOverlay => {
    popupOverlay.style.display = 'none';
});

// Fermer quznd clique à l'extérieur
window.addEventListener('click', (event) => {
    const clickedElement = event.target;

    if (!clickedElement.closest('.popup') && !clickedElement.classList.contains('popup-trigger')) {
        document.querySelectorAll('.popup-overlay').forEach(popupOverlay => {
            popupOverlay.style.display = 'none';
        });
    }
});

// Afficher popup quand clique sur déclencheur
document.querySelectorAll('.popup-trigger').forEach(trigger => {
    trigger.addEventListener('click', (event) => {
        event.stopPropagation();
        const popupId = trigger.id.replace('pop', 'popupOverlay');
        const popupOverlay = document.getElementById(popupId);
        popupOverlay.style.display = 'flex';
    });
});

// Fermer quand clique sur bouton fermeture
document.querySelectorAll('.close').forEach(closeButton => {
    closeButton.addEventListener('click', (event) => {
        event.stopPropagation(); 
        const popupId = closeButton.getAttribute('data-popup-id');
        const popupOverlay = document.getElementById(popupId);
        popupOverlay.style.display = 'none';
    });
});
