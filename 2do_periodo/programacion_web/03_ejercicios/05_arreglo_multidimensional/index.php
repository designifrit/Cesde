
<?php
    // Arreglo multidimensional
    $productosI = [
        array("arroz", 1800, "caribe"),
        array("aceite", 8600, "premier"),
        array("sal", 1000, "refisal")
    ];

    print_r($productosI);
    echo("<br>");
    echo($productosI[0][2]);
    echo("<br>");

    foreach($productosI as $arreglo ){
        echo($arreglo[0]);
        echo("<br>");
    }

    // Arreglo multidimensional asociativo
    $productosA = [
        "producto1" => array("arroz", 1800, "caribe"),
        "producto2" => array("aceite", 8600, "premier"),
        "producto3" => array("sal", 1000, "refisal")
    ];

    print_r($productosA);
?>
