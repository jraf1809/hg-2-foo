
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="widt=device-width, initial-scal">
    <meta http-equiv="X-UA compatible" content="ie=edge">
    
    <link rel="stylesheet" href="style.css">

    <title> UN NUEVO REGISTRO</title>


</head>

<body>

<h1>Datos Del Trabajador.</h1>

    <form ACTION="basicos.php" METHOD="POST"> 
	
   
    <br>
	
	<b>Fecha de Registro:</b> <input type="date" id="fecha_creacion" name="fech">
	
	<br>
	<br>
	
   <b>Nombres:</b> <input type="text" class="controls" name="un" id="nombres">
	
   <b>Apellidos:</b>  <input type="text" class="controls"name="dos" id="apellido">
  
   <b>Cedula:</b>	<input type="cedula"class="controls" name="cinco" id="">
   
   <b>Fecha de Nacimiento:</b> <input type="date" id="" name="naci">
	
  
   
   <br>
   <br>
   
  
    <b>Edad:</b>  <input type="text"class="controls" name="edad" id="">
   
    <b>Telefono Celular:</b>  <input type="text" class="controls"name="tres" id="Telefono">
   
 
   
     <b>Correo:</b>  <input type="email"class="controls" name="cuatro" id="email">
   
   <b>Estado Civil:</b> <select name="civil">
        <option value="Seleccionar">Seleccionar</option>
        <option value="Soltero">Soltero</option>
        <option value="Casado">Casado</option>
        <option value="Viudo">Viudo</option>
    </select>
	
	<b>Grupo Sanguineo:</b>  <input type="text" class="controls"name="sangui" id="">
	
	<br>
    <br>
	
	<b>Peso:</b>  <input type="text" class="controls"name="peso" id="">
	
	
	<b>Talla de Camisa:</b>  <input type="text" class="controls"name="camisa" id="">
	
	<b>Talla de Pantalon:</b>  <input type="text" class="controls"name="pantalon" id="">
	
	<b>Calzado:</b>  <input type="text" class="controls"name="calzado" id="">
	<br>
	<br>
	
	<b>Telefono de Habitacion:</b>  <input type="text" class="controls"name="hab" id="">
  
    <br>
	
	
	<h1>Direccion de Residencia: </h1>
	<h2>Estado: </h2>
	
	<select NAME="estado" ID="">
	
	
		<option value="">--Seleccionar Estado--</option>
		<option VALUE="Dto.Capital">Dto.Capital</option>
		<option VALUE="Miranda">Miranda</option>
		<option VALUE="Carabobo">Carabobo</option>
		<option VALUE="Zulia">Zulia</option>
		<option VALUE="Merida">Merida</option>

	</select>
	
	<h2>Municipio: </h2>
	
	<select NAME="municipio" ID="">
	
	
		<option value="">--Seleccionar Municipio--</option>
		<option VALUE="Libertador">Libertador</option>
		<option VALUE="Baruta">Baruta</option>
		<option VALUE="El Hatillo">El Hatillo</option>
		<option VALUE="Brion">Brion</option>
		<option VALUE="Guaicaipuro">Guaicaipuro</option>

	</select>
	
	<h2>Calle/Avenida/Transversal: </h2>
	
	<textarea id="" name="calle" rows="5" cols="50"></textarea>
	
	<br>
    <br>
	
	<b>¿Tiene algun familiar en el MPPOP?:</b> <select name="fam">
        <option value="Seleccionar">Seleccionar</option>
        <option value="Soltero">Si</option>
        <option value="Casado">No</option>
    </select>
	
	<b>Telefono de Emergencia:</b>  <input type="text" class="controls"name="emer" id="">
	
	<b>Posee Hijo Mayor a 25 Anos?</b><select name="hij">
									<option VALUE="seleccionar">Seleccionar</option>
									<option VALUE="si">Si</option>
									<option VALUE="no">No</option>
									</select>
	                                 
	<b>Pertenencia de Vivienda</b><select name="vivienda">
        <option value="Seleccionar">Seleccionar</option>
        <option value="Propia">Propia</option>
        <option value="Alquiler">Alquiler</option>
        <option value="Familiar">Familiar</option>
        <option value="Pagando">Pagando</option>
    </select>

	<br>
	<br>
	
	<b>Tiene Certificado de Carrera?</b><select name="Certificado">
        <option value="Seleccionar">Seleccionar</option>
        <option value="Si" aria-required="true">Si</option>
        <option value="No">No</option>
    </select>
	
	<b>Numero de Certificado:</b>  <input type="text" class="controls"name="numcer" id="">
	
	<b>Posee Alguna Discapacidad?:</b>  <input type="text" class="controls"name="disca" id="">
	
	<br>
	<br>
	<h2>NIvel Educativo del Tarbajador: </h2>
	
	<br>
	
	<b>Primaria</b><select name="primaria">
        <option value="Seleccionar">Seleccionar</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
                   </select>
				   
	<b>Bachiller</b><select name="bachiller">
        <option value="Seleccionar">Seleccionar</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
                   </select>
				   
	<b>Tecnico Superior En:</b>  <input type="text" class="controls"name="tecnico" id="">
	<b>Licenciado En:</b>  <input type="text" class="controls"name="licenciado" id="">
	<b>Maestria En:</b>  <input type="text" class="controls"name="maestria" id="">
	<br>
	<br>
	<b>Doctorado En:</b>  <input type="text" class="controls"name="doctorado" id="">
	<b>Otra Carrera:</b>  <input type="text" class="controls"name="otra" id="">
	<b>Cursos realizados con relación al cargo a desempeñar:</b>  <input type="text" class="controls"name="curso" id="">
	
	
	
	<br>
	<br>
	<input TYPE="SUBMIT" VALUE="Guardar Datos Basicos"/>
	<br>
	<br>
	
	</form>
	
	<h2>DOCUMENTOS/EXPEDIENTES:</h2>
<br>

<div style="width: 500px;margin: auto;border:1px solid blue;padding:30 px;">

<h4>SUBIR ARCHIVO</h4>

<form action="" method="post" enctype="multipart/form-data">

	<table>
	
	
	    <tr>
		
			<td colspan="2" > <input type="file" name="archivo"></td>
				
		</tr>
	
	    <tr>
		
			<td><input type="submit" value="subir" name="subir"></td>
			
		
			
		</tr>
	
	
	</table>

</form>

</div>
</br>
</br>
</br>

<form action="menu.php" method="post">
	
	<center><table width="200" BORDER="0"></center>
	
		
		
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="continuar" /></td>
		</tr>

	</table>
	
</form>
	
</body>
</html>	
		
<?php

if(isset($_POST['subir'])){
	 
	 $nombre = $_FILES['archivo']['name'];
     $tipo = $_FILES['archivo']['type'];
     $tamanio = $_FILES['archivo']['size'];
     $ruta = $_FILES['archivo']['tmp_name'];
     $destino = "archivos/".$nombre;
	  
	 if($nombre != ""){
		 
		 if(copy($ruta,$destino)){
			 
			 
			 
			 $conexion = mysqli_connect("localhost","universidad","123","universidad");
			 
			 $query = "INSERT INTO subir(tama,tipo,nombre)VALUES('$tamanio','$tipo','$nombre')";
			 
			 $resultado = mysqli_query($conexion,$query);
			 
			 
			  if($resultado){
		
		     echo "EL ARCHIVO SE ADJUNTO EN SISTEMA!!! Y SE GUARDO CORRECTAMENTE EN LA BASE DE DATOS "."<br>";	
			 
			 }else{
			 
			 echo "ERROR";
		    }
			 
			 
			//CODIGO PARA LA VISTA PREVIA 
			 
			$sql = "SELECT nombre FROM subir WHERE nombre = '$nombre'";
	
			$ejecutar = mysqli_query($conexion,$sql);
	
			if($ejecutar){
		
			echo "codigo correcto";
		
			}
			
			
			 
			
		 
	 }
	 
	 
 }

 }
 

?>
	
	



    