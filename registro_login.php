<?php
//variables como vector
	$nom = $_POST["nombre"];
	$usua = $_POST["usuario"];
	$corr = $_POST["correo"];
	$pass = $_POST["contra"];
	
	$servername="localhost";
	$username="root";
	$password="";
	$bd="horoscopo";
	
	//CONEXION
	$con=mysqli_connect($servername,$username,$password,$bd);
	if($con){
		$sql="insert into usuarios(nombre,usuario,correo,contra,status) values('".$nom."','".$usua."','".$corr."','".$pass."',1)";
		if(mysqli_query($con,$sql)){
			echo "Registro exitoso";
			header("location:pag.html");
		}
		else{
			echo "Registro fallido";
		}	
	}
	mysqli_close($con);	

?>