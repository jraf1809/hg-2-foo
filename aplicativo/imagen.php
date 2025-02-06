
<?php 

	 $conexion = mysqli_connect("localhost","universidad","123","universidad");

/*	 
	 if($conexion){
		 
		 echo "conexion exitosa";
		 
	 }

*/

	$sql = "SELECT nombre FROM subir WHERE nombre = '$nombre'";
	
	$ejecutar = mysqli_query($conexion,$sql);
	
	if($ejecutar){
		
		echo "codigo correcto";
		
	}

	$sql = "SELECT nombre FROM subir WHERE nombre = '$nombre'";
	
	$ejecutar = mysqli_query($conexion,$sql);
	
	if($ejecutar){
		
		echo "codigo correcto";
		
	}



?>