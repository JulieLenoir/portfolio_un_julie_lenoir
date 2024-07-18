
// FLECHE SCROLL AUTOMATIQUE VERS LE HAUT 
const flecheScroll = document.getElementById('scrollAutomatique');
console.log(flecheScroll);

window.onscroll = function () { scroll() };
function scroll() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        flecheScroll.style.opacity = 1;
        flecheScroll.style.visibility = "visible";
    } else {
        flecheScroll.style.opacity = 0;
        flecheScroll.style.visibility = "hidden";
    }
}

flecheScroll.addEventListener('click', remonterEnHaut)

function remonterEnHaut() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}




// ----------------------------------------------- pop up

document.getElementById('more-button').addEventListener('click', function () {
    document.getElementById('popup-container').style.display = 'block';
});

document.getElementById('popup-container').addEventListener('click', function (event) {
    if (event.target === this) {
        this.style.display = 'none';
    }
});

// ------------------------------------------------- fermeture pop up
document.querySelector('.close-btn').addEventListener('click', function () {
    document.getElementById('popup-container').style.display = 'none';
});


// ---------------------------------------------------

// Récupère tous les éléments icon-box
const iconBoxes = document.querySelectorAll('.icon-box');

// Ajoute un événement à chaque élément icon-box
iconBoxes.forEach((iconBox) => {
    iconBox.addEventListener('mouseover', () => {
        // Récupère l'élément detail-text ciblé
        const targetId = iconBox.getAttribute('data-target');
        const detailText = document.querySelector(targetId);
        detailText.style.display = 'block';
    });

    iconBox.addEventListener('mouseout', () => {
        // Récupère l'élément detail-text ciblé
        const targetId = iconBox.getAttribute('data-target');
        const detailText = document.querySelector(targetId);
        detailText.style.display = 'none';
    });
});




