
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



<form ACTION="borra.php" METHOD="POST">
	
 <h1>Indique el Nombre o la Cedula de la Persona que desea Eliminar:</h1>	
	
 <h3>Nombre:</h3> 
 
 <input type="input" id="campo4" name="kk">
 
 <h3>Cedula:</h3> 
 
 <input type="input" id="campo4" name="pp">
 
 <br>
 <br>
 
 <input TYPE="SUBMIT" VALUE="Eliminar" NAME="uu">
 
 </form>


<?php

	

	
	$conexion = mysqli_connect("localhost","universidad","123","universidad");

	
	
	$ale = $_POST['kk'];
    $ce =  $_POST['pp'];
   
	
	if(isset($_POST['uu'])){
		

		
		$eliminar = "DELETE FROM basica WHERE nombre = '$ale'";
	 
	    $resultado = mysqli_query($conexion,$eliminar);
			
	}
 
 
 		
 
 
 ?>
 
 
 
 <form ACTION="mostrar.php">
 
 <input TYPE="SUBMIT" VALUE="Continuar" NAME="">
 
 
 </form>
 
 
 
</BODY>

</HTML>
