
/* ########################### CLASE 1 ########################### */




/* ########################### CLASE 2 ########################### */

// Funciones tradicional 

function showAlert(a , b){
    return a + b;
}

let result = showAlert("Hola ", "mundo");
showAlert(result);

// Funciones Flecha 'a partir de de la v6' =>
const text = a => {
    alert(a);
}

const resultadoFuncFlecha = (a , b) => {
    return a + b;
}

let total = resultadoFuncFlecha(2, 3);
alert(total);

// Crear Array
let myArray = [1 , 2, 3, 4, 5];

// Recorrer Array
myArray.forEach((elemento) => {
    console.log(elemento);
});

let myNewArray = myArray.map((elemento) => {
    return elemento * 3;
});

console.log(myNewArray);

// Objetos
let myObject = {
    age: 25,
    username : "Pedro",
    id: 123456
}

// Desestructuración
const {age, username, id} = myObject;
console.log(age);