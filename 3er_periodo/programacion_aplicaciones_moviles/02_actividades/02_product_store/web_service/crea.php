<?php 
	if (isset($_REQUEST['producto']) && isset($_REQUEST['descripcion']) && isset($_REQUEST['existencias']) && isset($_REQUEST['valor']))
	{
		$producto = $_REQUEST['producto'];
		$descripcion = $_REQUEST['descripcion'];
		$existencias = $_REQUEST['existencias'];
		$valor = $_REQUEST['valor'];
		$cnx =  mysqli_connect("localhost","root","","productos_store") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
		$result = mysqli_query($cnx,"SELECT producto FROM productos WHERE producto = '$producto'");
		if (mysqli_num_rows($result)==0)
		{
			mysqli_query($cnx,"INSERT INTO productos (producto,descripcion,existencias,valor) VALUES ('$producto','$descripcion','$existencias','$valor')");	
		}
		else
		{
			echo "El producto ya existe";
		}
		mysqli_close($cnx);
	}else{
		echo "Debe especificar producto, descripcion, existencias y valor";
	}
?>