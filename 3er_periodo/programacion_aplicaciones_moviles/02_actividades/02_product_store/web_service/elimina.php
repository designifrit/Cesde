<?php 
if (isset($_REQUEST['producto']))
{
	$producto=$_REQUEST['producto'];
	$cnx =  mysqli_connect("localhost","root","","productos_store") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	$result = mysqli_query($cnx,"SELECT producto FROM productos WHERE producto = '$producto'");
	if (mysqli_num_rows($result)>0)
	{
		mysqli_query($cnx,"DELETE FROM productos WHERE producto = '$producto'");	
	}
	else
	{
		echo "El producto no existe";
	}
	mysqli_close($cnx);
}
else
{
	echo "Debe especificar el producto";
}
?>
