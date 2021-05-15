<?php
if (isset($_REQUEST['producto']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['existencias']) && isset($_REQUEST['valor']))
{
	$producto=$_REQUEST['producto'];
	$descripcion=$_REQUEST['descripcion'];
	$existencias=$_REQUEST['existencias'];
	$valor=$_REQUEST['valor'];

	$cnx =  mysqli_connect("localhost","root","","productos_store") or die ("could not connect to mysql"); 
	$result = mysqli_query($cnx,"SELECT producto FROM productos WHERE producto = '$producto'");
	if (mysqli_num_rows($result)==0)
	{
		mysqli_query($cnx,"INSERT INTO productos (producto,descripcion,existencias,valor) VALUES ('$producto','$descripcion', '$existencias', '$valor')");	
	}
	else
	{
		echo "El producto ya existe";
	}
}else{
	echo "Debe especificar producto, descripción, existencias y valor";
}
mysqli_close($cnx);
?>
