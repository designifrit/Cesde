
<?php

    $producto1 = 'arroz';
    $producto2 = 'panela';
    $producto3 = 'papa';
    $producto4 = 'cerveza';
    $producto5 = 'pasta';
    $producto6 = 'atún';
    $producto7 = 'frijoles';
    $producto8 = 'carne';
    $producto9 = 'arepas';
    $producto10 = 'huevos';

    $precio1 = 1500;
    $precio2 = 7000;
    $precio3 = 8000;
    $precio4 = 30000;
    $precio5 = 2200;
    $precio6 = 9000;
    $precio7 = 4800;
    $precio8 = 25000;
    $precio9 = 10000;
    $precio10 = 14000;

    $productoEspecial = 'manzana';

    switch($productoEspecial){
        case 'manzana': 
            echo('Tiene 10% de descuento');
        break;
        case 'banano':
            echo('Tiene un descuento del 5%');
        break;
        default:
            echo('No hay descuento');
        break;
    }

    $total = $precio1 + $precio2 + $precio3 + $precio4 + $precio5 + $precio6 + $precio7 + $precio8 + $precio9 + $precio10;

    echo('El total de la compra es: '.$total);

    if($total > 8000){
        echo('Querido amigo, no alcanza el dinero');
    }else{
        echo('Gracias por tu compra');
    }
?>
