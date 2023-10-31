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

// Ajoute des gestionnaires d'événements pour les boutons "moins"
btnMoins.forEach(function(button) {
    button.addEventListener('click', function() {
        var inputField = this.closest('.input-groupe').querySelector('.input-form-commande');
        var value = parseInt(inputField.value);
        if (value > 0) {
            inputField.value = value - 1;
        }
    });
});



// function validerFormulaire() {
//   var quantites = document.querySelectorAll('.input-form-commande');
//   var totalQuantite = 0;

//   quantites.forEach(function(inputField) {
//       totalQuantite += parseInt(inputField.value);
//   });

//   if (totalQuantite > 0) {
//       // L'utilisateur a choisi au moins un produit, il peut remplir les champs de données personnelles.
//       return true; // Permet la soumission du formulaire.
//   } else {
//       alert("Veuillez choisir au moins un produit avant de continuer.");
//       return false; // Empêche la soumission du formulaire.
//   }
// }
