// Sélectionnez tous les boutons "plus" et "moins"
var btnPlus = document.querySelectorAll('.btn-plus');
var btnMoins = document.querySelectorAll('.btn-moins');

// Ajoutez des gestionnaires d'événements pour les boutons "plus"
btnPlus.forEach(function(button) {
    button.addEventListener('click', function() {
        var inputField = this.closest('.input-groupe').querySelector('.input-form-commande');
        inputField.value = parseInt(inputField.value) + 1;
    });
});

// Ajoutez des gestionnaires d'événements pour les boutons "moins"
btnMoins.forEach(function(button) {
    button.addEventListener('click', function() {
        var inputField = this.closest('.input-groupe').querySelector('.input-form-commande');
        var value = parseInt(inputField.value);
        if (value > 0) {
            inputField.value = value - 1;
        }
    });
});
