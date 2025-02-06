
<?php

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= archivo.xls");



?>

<?php

// CONEXION A LA BASE DE DATOS.

	$conexion = mysqli_connect("localhost","universidad","123","universidad");
	
	$consulta = "SELECT * FROM basica";
		
		$resultado = mysqli_query($conexion,$consulta);
		
		

		
		echo '<table border="1" style="margin: 0 auto;">';
	
		echo '<tr><th>Nombre</th><th>Apellido</th><th>telefono</th><th>Correo</th><th>Estado</th><th>Municipio</th><th>Calle</th><th>Cedula</th><th>FechaRegistro</th><th>FechaNacimiento</th><th>Edad</th><th>EstadoCivil</th><th>GrupoSanguineo</th><th>Edad</th><th>Peso</th><th>Camisa</th><th>Pantalon</th><th>Calzado</th><th>TelfHabitacion</th><th>Familiares?</th><th>Telf.Emergencia</th><th>Hijos</th><th>Vivienda</th><th>Certificados</th><th>NumeroCertificados</th><th>Discapacidad</th><th>Primaria</th><th>Bachiller</th><th>Licenciado</th><th>Maestria</th><th>Doctorado</th><th>OtraCarrera</th><th>Cursos</tr>';
	
		while ($matriz = mysqli_fetch_array($resultado)) {
			
		
			
		
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

	
	
		echo '</tr>';
    }
    
		echo '</table>';
		
			
		
?>