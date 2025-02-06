

<HTML>

<HEAD>

	
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</HEAD>

<BODY>


<form ACTION="camb.php" METHOD="POST">
	
 <h1>Indique el valor actual que posee el cliente:</h1>	
	
 <h3>Nombre:</h3> 
 
 <input type="input" id="campo4" name="tortuga">
 
 <h3>Cedula:</h3> 
 
 <input type="input" id="campo4" name="cocodrilo">
 

 <h1>Ingrese el Dato nuevo para Modificar al anterior:</h1>

 <h3>Nombre:</h3> 
 <br>
 <br>
 
 <input type="input" id="campo4" name="cam">
 
 <h3>Cedula:</h3>
 
 <input type="input" id="campo4" name="bo">
 
 <br>
 <br>
 
 <input TYPE="SUBMIT" VALUE="Guardar CAMBIOS" NAME="love">
 
 </form>
 
 <?php
 
 
	$conexion = mysqli_connect("localhost","universidad","123","universidad");

	

 
 $pu = $_POST['tortuga'];
 $c =  $_POST['cocodrilo'];
 $d =  $_POST['bo'];
 $nue =  $_POST['cam'];
 
 
 if(isset($_POST['love'])){
		
		$modificar = "UPDATE basica SET nombre = '$nue' WHERE nombre = '$pu'";
		$change =  "UPDATE basica SET cedula = '$d' WHERE cedula = '$c'";
	 
	    $resultado = mysqli_query($conexion,$modificar);
		$resultado = mysqli_query($conexion,$change);
		
	}
	
	
	
 
 
 		
 
 
 ?>
 
 
 <form ACTION="mostrar.php">
 
 <input TYPE="SUBMIT" VALUE="Continuar" NAME="">
 
 
 </form>
 
</BODY>

</HTML>
