//declarar variables
document.getElementById("btn__registrarse").addEventListener("click",register);
document.getElementById("btn__iniciar-sesion").addEventListener("click",iniciarSesion);
window.addEventListener("resize",anchoPagina);
var container_login_register=document.querySelector(".container__login-register");
var formulario_login=document.querySelector(".formulario__login");
var formulario_register=document.querySelector(".formulario__register");
var caja_atras_login=document.querySelector(".caja__atras-login");
var caja_atras_register=document.querySelector(".caja__atras-register");
function anchoPagina() {
    if (window.innerWidth>850){
        caja_atras_login.style.display="block";
        caja_atras_register.style.display="block";
    }else{
        caja_atras_register.style.display="block";
        caja_atras_register.style.opacity="1";
        caja_atras_login.style.display="none";
        formulario_login.style.display="block";
        formulario_register.style.display="none";
        container_login_register.style.left="0px";
    }
}
anchoPagina();
function iniciarSesion(){
    if (window.innerWidth>850) {
        formulario_register.style.display="none";
        container_login_register.style.left="10px";
        formulario_login.style.display="block";
        caja_atras_register.style.opacity="1";
        caja_atras_login.style.opacity="0";
    }else{
        formulario_register.style.display="none";
        container_login_register.style.left="0px";
        formulario_login.style.display="block";
        caja_atras_register.style.display="block";
        caja_atras_login.style.display="none";
    }
}

function register(){
    if(window.innerWidth>850){
        formulario_register.style.display="block";
        container_login_register.style.left="410px";
        formulario_login.style.display="none";
        caja_atras_register.style.opacity="0";
        caja_atras_login.style.opacity="1";
    }else{
        formulario_register.style.display="block";
        container_login_register.style.left="0px";
        formulario_login.style.display="none";
        caja_atras_register.style.display="none";
        caja_atras_login.style.display="block"; 
        caja_atras_login.style.opacity="1"
    }
}
