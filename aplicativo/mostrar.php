
<head>


<meta charset="UTF-8">
	
	
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	

</head>




<body>

<h3>**-  <a href="pdf_bas.php" target ="_blank"> GENERAR REPORTE </a>

</br>

<h3>**-  <a href="excel.php" target ="_blank"> DESCARGAR REPORTE EN EXCEL</a>

	<center><h3>Nombre: </h3></center>
	
	<form ACTION="mostrar.php" METHOD="POST">
			
	<center><input TYPE="TEXT" NAME="ver"></center>
	
	<br/>
	
	<center><input TYPE="submit" value="CONSULTAR" NAME="bconsult"></center> 
	
	<br/>
			
	</form>
	
	
	<form ACTION="camb.php" METHOD="POST">

	<center><input TYPE="SUBMIT" VALUE="MODIFICAR DATOS DEL CLIENTE" NAME=""></center>


	</form>
	
	
</form>


<form ACTION="borra.php" METHOD="POST">

	<center><input TYPE="SUBMIT" VALUE="Eliminar datos del cliente" NAME=""></center>


</form>



<br>
<br>



</body>







</html>




<?php

$conexion = mysqli_connect("localhost","universidad","123","universidad");

$doc;




if(isset($_POST['bconsult'])){
		
	
		$doc = $_POST['ver'];
		
	
		
		$consulta = "SELECT * FROM basica WHERE nombre = '$doc'";
		
		$resultado = mysqli_query($conexion,$consulta);
		
		$previa = "SELECT * FROM subir";
		
		$result = mysqli_query($conexion,$previa);

		
		echo '<table border="1" style="margin: 0 auto;">';
	
		echo '<tr><th>Nombre</th><th>Apellido</th><th>telefono</th><th>Correo</th><th>Estado</th><th>Municipio</th><th>Calle</th><th>Cedula</th><th>FechaRegistro</th><th>FechaNacimiento</th><th>Edad</th><th>EstadoCivil</th><th>GrupoSanguineo</th><th>Edad</th><th>Peso</th><th>Camisa</th><th>Pantalon</th><th>Calzado</th><th>TelfHabitacion</th><th>Familiares?</th><th>Telf.Emergencia</th><th>Hijos</th><th>Vivienda</th><th>Certificados</th><th>NumeroCertificados</th><th>Discapacidad</th><th>Primaria</th><th>Bachiller</th><th>Licenciado</th><th>Maestria</th><th>Doctorado</th><th>Cursos</th><th>Expediente>';
	
		while ($matriz = mysqli_fetch_array($resultado) and $row = $result->fetch_assoc()) {
			
		$rutaArchivo = $row['nombre'];
			
		
		echo '<tr>';
	
		echo '<td>' . $matriz['nombre'] . '</td>'; 
		echo '<td>' . $matriz['apellido'] . '</td>';
		echo '<td>' . $matriz['telefono'] . '</td>';
		echo '<td>' . $matriz['correo'] . '</td>';
		echo '<td>' . $matriz['estado'] . '</td>';
		echo '<td>' . $matriz['municipio'] . '</td>';
		echo '<td>' . $matriz['calle'] . '</td>';
		echo '<td>' . $matriz['cedula'] . '</td>';
		echo '<td>' . $matriz['fregistro'] . '</td>';
		echo '<td>' . $matriz['nacimiento'] . '</td>';
		echo '<td>' . $matriz['edad'] . '</td>';
		echo '<td>' . $matriz['edocivil'] . '</td>';
		echo '<td>' . $matriz['gruposan'] . '</td>';
		echo '<td>' . $matriz['peso'] . '</td>';
		echo '<td>' . $matriz['camisa'] . '</td>';
		echo '<td>' . $matriz['pantalon'] . '</td>';
		echo '<td>' . $matriz['calzado'] . '</td>';
		echo '<td>' . $matriz['habitacion'] . '</td>';
		echo '<td>' . $matriz['familiar'] . '</td>';
		echo '<td>' . $matriz['emergencia'] . '</td>';
		echo '<td>' . $matriz['hijo'] . '</td>';
		echo '<td>' . $matriz['vivienda'] . '</td>';
		echo '<td>' . $matriz['certificado'] . '</td>';
		echo '<td>' . $matriz['numerocert'] . '</td>';
		echo '<td>' . $matriz['discapacidad'] . '</td>';
		echo '<td>' . $matriz['primaria'] . '</td>';
		echo '<td>' . $matriz['bachiller'] . '</td>';
		echo '<td>' . $matriz['licenciado'] . '</td>';
		echo '<td>' . $matriz['maestria'] . '</td>';
		echo '<td>' . $matriz['doctorado'] . '</td>';
		echo '<td>' . $matriz['otra'] . '</td>';
		echo '<td>' . $matriz['curso'] . '</td>';
		echo '<td>' . '<a href="archivos/'.$rutaArchivo.'" target="_blank">VER ARCHIVO</a>'. '</td>';
		
		
		
		
		
		
		
		
		
		
		
	
		echo '</tr>';
    }
    
		echo '</table>';
		
			
	}

?>

<html>

<head>
</head>

<body>
<br>
<br>
<form action="menu.php" method="post">
	
	
			<center><input type="submit" value="Salir" /></center>
		
	
</form>

</body>

</html>