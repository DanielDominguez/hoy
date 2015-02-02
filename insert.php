<?php 
	include_once 'coneccion.php'; //INCLUYO ARCHIVO DE CONEXIÓN
	$nombre=$_POST['nombre'];
		//======== INSERTAR ========= //
		$insert = "INSERT INTO usuarios (codigo,nombre) VALUES('10112029','$nombre')";
		if(mysqli_query($con, $insert)){
			echo "Se insertaron los datos correctamente :)";
		}
		else{
			echo "Los datos no se pudieron insertar :(";
		}
	 		
 ?>