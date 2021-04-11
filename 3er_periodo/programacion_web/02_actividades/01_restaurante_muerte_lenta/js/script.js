
//Restaurante Muerte lenta
/* Variables

let hamburguesa = 10000;
let perros = 8000;
let salchipapas = 6000;
let chorizos = 7000;
let clientes;
let pedidos;


let i = true;
let p = false;

while(i == true){

    while(p == false){
        let orden = prompt("Por favor ingresa la cantidad de personas que van a hacer un pedido: ");
        if(orden >= 1 && orden < 11){
            clientes = orden;
            p = true;
        }else{
            alert("Ingresa un valor númerico válido");
            p = false;
        }
    }

    for(c = 1; c <= clientes; c++){
        alert("Por favor ingresa el pedido número: " + c);
        pedidos = prompt("1 = Hamburguesa, 2 = Perro, 3 = Salchipapas, 4 = Chorizo");
        switch(pedidos){
            case 1:
                console.log("Pedido " + c + " es Hamburguesa");
                break;
            case 2:
                console.log("Pedido " + c + " es Perro");
                break;
            case 3:
                console.log("Pedido " + c + " es Salchipapas");
                break;
            case 4:
                console.log("Pedido " + c + " es Chorizo");
                break;
        }
    }

    i = false;
}
*/

let numPeople = parseInt(prompt("Ingrese el número de personas"));
let total = 0;
let counterHamburger = 0;
let counterDogs = 0;
let counterChorizo = 0;
let counterSalchipapa = 0;
while (true) {
    for (let i = 1; i <= numPeople; i++) {
        let plate = prompt("Ingrese el plato - h(Hamburguesa), p(perro), C(chorizo), s(salchipapa)");
        switch (plate) {
            case "h":
                total = total + 10000;
                counterHamburger++;
                break;
            case "p":
                total = total + 8000;
                counterDogs++;
                break;
            case "c":
                total = total + 6000;
                counterChorizo++;
                break;
            case "s":
                total = total + 7000;
                counterSalchipapa++;
                break;
        }
    }
    let stop = prompt("Desea pedir más platos s(si) otra tecla no");
    if(stop != "s"){
        break;
    }
}
if (total > 20000) {
    total = total * 0.9;
}
let tip = prompt("Desea incluir la propia el 10% del valor de la compra - s(si)");
if (tip == "s") {
    total = total * 1.1;
}
if (total > 20000) {
    
    alert(`se realizó un descuento del 10% por compras superiores a 20000`);
}
else {
    alert(`No tiene descuento`);
}
if(counterSalchipapa > 1 || counterDogs > 1 || counterChorizo > 1 || counterHamburger > 1){
    total = total * 0.95;
    alert(`descuento del 5% por comrar 2 o más productos iguales`);
}
alert(`El valor a pagar es ${total}`);
