function verContrasenia(){
    var contrasenia = document.getElementById('contrasenia');
    var icono = document.getElementById('verContraseniaBoton');
    if (contrasenia.type === 'password'){
        contrasenia.type = 'text';
        icono.classList.remove('bi-eye-slash');
        icono.classList.add('bi-eye');
    } else {
        contrasenia.type = 'password';
        icono.classList.remove('bi-eye');
        icono.classList.add('bi-eye-slash'); 
    }
}