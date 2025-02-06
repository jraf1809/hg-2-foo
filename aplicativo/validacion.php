


<html>

<head>

<meta charset="UTF-8">



</head>


<body>

<?php
	
$uno = $_POST['primero'];
$dos = $_POST['segundo'];
	
$conexion = mysqli_connect("localhost","universidad","123","universidad");
	
$consulta = "SELECT * FROM usuario WHERE user = '$uno' and contrasena = '$dos'";
	
$resultado = mysqli_query($conexion,$consulta);
	

	$filas = mysqli_num_rows($resultado);
	
	if($filas>0){
		
		header("location:menu.php");
		
	}else{
		
		
		header("location:error.php");
		
	}
	
	mysqli_free_result($resultado);
	
?>

</body>

</html>