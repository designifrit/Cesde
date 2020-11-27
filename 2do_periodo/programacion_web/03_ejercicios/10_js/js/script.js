
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
