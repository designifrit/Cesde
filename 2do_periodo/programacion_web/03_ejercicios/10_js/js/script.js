
// Consumir API con JS
// 1. Identificar la URL de la API a consumir
let url = "https://swapi.dev/api/starships";

// 2. Configurar parámetros de envío
let parametros = {
    method: "GET";
};

// 3. Utilizar el método FETCH
fetch(url, parametros)
    .then(respuesta => respuesta.json())
    .then(datos => depurar(datos))

// 4. Definir la función depurar
function depurar(datos){
    console.log(datos);
}


let titulo = document.getElementById('titulo');
let imagen = document.getElementById('imagen');
let audio = document.getElementById('audio');
let boton = document.getElementById('boton');

boton.addEventListener('click', cambiar);

function cambiar(){
    titulo.textContent = "Banda Británica Coldplay";
    imagen.src = "../img/imagen2.jpg";
    audio.src = "../files/audio2.mp3";
}
