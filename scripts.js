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

const contadores = document.querySelectorAll('.cont');
const vel =50;

contadores.forEach(cont =>{
    console.log(cont.getAttribute('data-target'));
    const actualizar = () => {
        const target = +cont.getAttribute('data-target');
        const contar = +cont.innerText.replace('%', '');
        const inc = Math.ceil(target/vel);
        if (contar<target){
            cont.innerText = contar + inc + "%";
            setTimeout(actualizar, 40)
        } else {
            cont.innerText = target + "%";
        }
    }

    actualizar();
});
