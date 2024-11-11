function verContrasenia(){
    var contrasenia = document.getElementById('contrasenia');
    var contraseniaConf = document.getElementById('contraseniaConf');
    var icono = document.getElementById('verContraseniaBoton');
    var iconoConf = document.getElementById('verContraseniaBotonConf');

    if (contrasenia.type === 'password') {
        contrasenia.type = 'text';
        contraseniaConf.type = 'text';
        icono.classList.remove('bi-eye-slash');
        icono.classList.add('bi-eye');
        iconoConf.classList.remove('bi-eye-slash');
        iconoConf.classList.add('bi-eye');
        console.log(iconoConf);
        
    } else {
        contrasenia.type = 'password';
        contraseniaConf.type = 'password';
        icono.classList.remove('bi-eye');
        icono.classList.add('bi-eye-slash');
        iconoConf.classList.remove('bi-eye');
        iconoConf.classList.add('bi-eye-slash');
    }
}
