var btnPlus = document.querySelectorAll('.btn-plus');  
var btnMoins = document.querySelectorAll('.btn-moins');  


btnPlus.forEach(function(button) {
    button.addEventListener('click' , function() {
        var inputField = this.closest('.input-groupe').querySelector('.input-form-commande');
        inputField.value = parseInt(inputField.value) + 1;
    });
});

btnMoins.forEach(function(button) {
    button.addEventListener('click' , function() {
        var inputField = this.closest('.input-groupe').querySelector('.input-form-commande');
        inputField.value = parseInt(inputField.value) - 1;
    });
});
