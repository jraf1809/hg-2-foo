
<?php

	$one = $_POST['un'];
	$two = $_POST['dos'];
	$three = $_POST['tres'];
	$four = $_POST['cuatro'];
	$five = $_POST['estado'];
	$six = $_POST['municipio'];
	$seven = $_POST['calle'];
	$end = $_POST['cinco'];
	
	$eigt = $_POST['fech'];
	$nine = $_POST['naci'];
	$ten = $_POST['edad'];
	$eleven = $_POST['civil'];
	$twelve = $_POST['sangui'];
	$third = $_POST['peso'];
	$fteen = $_POST['camisa'];
	$steen = $_POST['pantalon'];
	$zapato = $_POST['calzado'];
	$eteen = $_POST['hab'];
	$nteen = $_POST['fam'];
	$twenty = $_POST['emer'];
	$twenty1 = $_POST['hij'];
	$twenty2 = $_POST['vivienda'];
	$twenty3 = $_POST['numcer'];
	$twenty4 = $_POST['numcer'];
	$twenty5 = $_POST['disca'];
	$twenty6 = $_POST['primaria'];
	$twenty7 = $_POST['bachiller'];
	$twenty8 = $_POST['licenciado'];
	$twenty9 = $_POST['maestria'];
	$twenty10 = $_POST['doctorado'];
	$twenty11 = $_POST['otra'];
	$twenty12 = $_POST['curso'];
	
	
	
	$conexion = mysqli_connect("localhost","universidad","123","universidad");
	
	$insertar = "INSERT INTO basica (nombre,apellido,telefono,correo,estado,municipio,calle,cedula,fregistro,nacimiento,edad,edocivil,gruposan,peso,camisa,pantalon,calzado,habitacion,familiar,emergencia,hijo,vivienda,certificado,numerocert,discapacidad,primaria,bachiller,licenciado,maestria,doctorado,otra,curso) VALUES ('$one','$two','$three','$four','$five','$six','$seven','$end','$eigt','$nine','$ten','$eleven','$twelve','$third','$fteen','$steen','$zapato','$eteen','$nteen','$twenty','$twenty1','$twenty2','$twenty3','$twenty4','$twenty5','$twenty6','$twenty7','$twenty8','$twenty9','$twenty10','$twenty11','$twenty12')"; 
	
	$ejecutar = mysqli_query($conexion,$insertar);
	
	if($ejecutar){
		
		echo "datos insetados correctamente";
		
		
	}






?>