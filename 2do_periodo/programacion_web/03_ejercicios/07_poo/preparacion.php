
<?php
    include('Sopa.php');

    // Crear un objeto de la clase (los objetos son variables)
    $ajiaco = new Sopa();

    // Acceder a un atributo
    $ajiaco->cantidadAgua = "2 litros";

    echo($ajiaco->cantidadAgua);

    // Acceder a un método
    $ajiaco->disfrutarSopa();
    
?>