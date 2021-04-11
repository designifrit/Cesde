
let number = parseInt(prompt('Ingrese número entero'));
let binary = "";
const divisor = 2;

while(parseInt(number / divisor) >= 1){
    binary = binary + "" + number % divisor;
    number = parseInt(number / divisor);
    console.log(number);
}

binary += 1;
newBinary = "";

for(let i = binary.length - 1; i >= 0; i--){
    newBinary += binary[i];
}

console.log(newBinary);
