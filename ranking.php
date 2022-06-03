<?php
	include("cn.php"); 
	$ranking="SELECT * FROM ranking";
?>
<!DOCTYPE HTML >
<html>
	<head>
		<title>Ranking Semanal </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title> W3.CSS</title>



	</head>
	<body background="s15.jpg" height="100%" width="100%">
	
	<font color="white" size="5px" face="garamond">
	
	
		<form name="formulario1">
			<table style="text-align: left; margin-left: auto; margin-right: auto;">
				<tbody>
					<tr>
						<td>
							<label for="dia">Ingresa tu signo:</label>
						</td>
						<td>
							<input required="required" step="1" type="text" />
						</td>
					</tr>				
					<tr align="center">
						<td colspan="2" rowspan="1">
							<input value="Calcular" type="button" onclick="formulario2;" />
							<input type="reset" />
							<a href="pag.html">Volver atras</a>
						</td>
					</tr>			
				</tbody>
			</table>
		</form>
		<form name="formulario2">
		<div class="w3-panel w3-red w3-display-container">
			<span onclick="this.parentElement.style.display='none'"class="w3-button w3-red w3-large w3-display-topright">x</span>
			<?php $result=mysqli_query($conexion, $ranking); 
			while ($row=mysqli_fetch_array($result)) { ?>
			<div><p>signo</p><?php echo $row["signo"] ?></div>
			<div><p>posicion</p><?php echo $row["posicion"] ?></div>
			<div><p>semana</p><?php echo $row["semana"] ?></div>
			<?php } ?>
		</div>
	</form>
		</font>
	</body>

<body>

<div class="w3-container">
 

  <div class="w3-panel w3-leftbar">
    <p><i class="fa fa-quote-right w3-xxlarge"></i><br>
    <i class="w3-serif w3-xlarge">
    <p style="color:gold">Conoce tu suerte en el ranking semanal .</i></p>
  </div>
</div>
</html>