// Sélectionne tous les boutons "plus" et "moins"
var btnPlus = document.querySelectorAll('.btn-plus');
var btnMoins = document.querySelectorAll('.btn-moins');

// Ajoute des gestionnaires d'événements pour les boutons "plus"
btnPlus.forEach(function(button) {
    button.addEventListener('click', function() {
        var inputField = this.closest('.input-groupe').querySelector('.input-form-commande');
        inputField.value = parseInt(inputField.value) + 1;
    });
});