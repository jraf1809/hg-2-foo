

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Seguros Cesar Monagas</title>

</head>


<body>

<?php


	
	$uno = $_POST['primero'];
	$dos = $_POST['segundo'];
	
   
    $conexion = mysqli_connect("localhost","universidad","123","universidad");
	
	if($conexion){
		
		echo "conexion correcta";
		
	}
	

   $meter = $insertar = "INSERT INTO usuario (user,contrasena) VALUES ('$uno','$dos')";
	
   $resultado = mysqli_query($conexion,$meter);
	
   echo "USUARIO Y CLAVE CREADOS CORRECTAMENTE";
		
		
															

?>


	
<form action="ingresar.php" method="post">
	
	
		
		
		    <center><h3>VOLVER A PAGINA PRINCIPAL</h3></center>
		
			<center><input type="submit" value="Continuar" /></center>
		

	
	
</form>

</body>

</html>
