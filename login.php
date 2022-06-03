<?php

$usua = $_POST["usuario"];
$pass = $_POST["contra"];
	

	$conexion=mysqli_connect("localhost", "root", "", "horoscopo");
	$sql="SELECT * FROM usuarios WHERE usuario='".$usua."'";
	$resultado = mysqli_query($conexion,$sql);
	echo $sql;
	if($resultado){
		
		$registro=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		
		
		echo "x".$registro["usuario"];
		

	if($registro["contra"]==$pass && $registro["status"]==1) {
		
		echo "¡Usted es un usuario autorizado!";
		header("location: pag.html");
		
}
	
	else {
		echo "¡Usuario no autorizado! Contraseña incorrecta o estatus inactivo ";
		
	}
	}
	
	mysqli_close($conexion);
	
	
?>