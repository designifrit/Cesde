
<?php
    // Arreglo indexado (Los nombres de cada elemento son índices o números)
    $productos = array("arroz","atun","apio","pollo");
    print_r($productos);
    echo("<br>");
    echo($productos[0]);
    echo("<br>");

    // Arreglo asociativo (el usuario configura la clave)
    $productosAsociados = array('producto1'=>"arroz",'producto2'=>"atun",'producto3'=>"apio",'producto 4'=>"pollo");
    print_r($productosAsociados);
    echo("<br>");
    echo($productosAsociados["producto2"]);

    // Arreglo de números
    echo("<br>");
    $numeros = array(1,2,3,4,5,6,7,8,9,10);

    // El bucle Foreach es un ciclo especial para arreglos
    // recorre el arreglo y almacena el valor
    foreach($numeros as $valor){
        echo($valor);
        echo("<br>");
    }

    foreach($productosAsociados as $clave => $valor){
        echo($valor);
        echo("<br>");
    }
    /*
    for($centinela = 0; $centinela < 10; $centinela++){
        echo("Hola mundo");
        echo("<br>");
    }*/
?>
