
/*
let nombreUsuario='Alejandro Orozco';
let password='admin123*';

let tienda='DELI';
let producto='Torta chocolate';
let costo=32000;

let descuento=0.2;

let precioTotal=costo-(costo * descuento);

console.log('El costo total es: ' + precioTotal + ' pesos');
// alert('El costo total es: ' + precioTotal + ' pesos');
*/

let nav = document.getElementById('nav');
console.log(nav);


//TRAER LOS DATOS DE LOS INPUTS

// 1. Creo las variables para almacenar la etiqueta de input que contiene el nombre de usuario
let nombreUsuario = document.getElementById('usuario');
let correoUsuario = document.getElementById('correo');
let passUsuario = document.getElementById('passusuario');

let ayudaNombre = document.getElementById('ayudanombre');
let ayudaCorreo = document.getElementById('ayudacorreo');
let ayudaPass = document.getElementById('ayudapass');

// 2. Creo una variable para almacenar la etiqueta del botón de envío
let botonEnviar = document.getElementById('enviar');

// 3. Detectar que se presiona el botón de registro
botonEnviar.addEventListener("click", validarRegistro);

console.log(botonEnviar);

// 4. Funcion para validar el formulario
function validarRegistro(evento){
    evento.preventDefault();

    if(nombreUsuario.value == ""){
        nombreUsuario.classList.add("is-invalid");
        ayudaNombre.textContent = "Por favor diligencia este campo";
        ayudaNombre.classList.add("alert");
    }else if(correoUsuario.value == ""){
        correoUsuario.classList.add("is-invalid");
        ayudaCorreo.textContent = "Por favor diligencia este campo";
        ayudaCorreo.classList.add("alert");
    }else if(passUsuario == ""){
        passUsuario.classList.add("is-invalid");
        ayudaPass.textContent = "Por favor ingresa una contraseña";
        ayudaPass.classList.add("alert");
    }else{
        nombreUsuario.classList.remove("is-invalid");
        correoUsuario.classList.remove("is-invalid");
        passUsuario.classList.remove("is-invalid");

        ayudaNombre.textContent = "";
        ayudaNombre.classList.remove("alert");
        ayudaCorreo.textContent = "";
        ayudaCorreo.classList.remove("alert");
        ayudaPass.textContent = "";
        ayudaPass.classList.remove("alert");
    }
}
