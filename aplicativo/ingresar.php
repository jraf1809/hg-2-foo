
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA compatible" content="ie=edge">
    
	<link href="css/estilos.css" rel="stylesheet" type="text/css">
	
	
    <title>Formulario</title>
</head>
<body>
    
    <section class="Formulario">
        
     <center>   <h1>ACCEDE</h1>  </center>  
        <br>
        <form action="validacion.php" method="post"><label for="size"></label>
            <br>
            
         <center>      <h3>Inicia Sesion para Continuar:</h3>  </center>  
            <br>
         <center>      <label for="Nombre">Nombre</label>  </center>  
		 
            <br>
         <center>     <input type="text" class="controls" name="primero" id="nombres"placeholder="">  </center>  
            <br>
            <br>
           
         <center>      <label for="Contraseña">Contraseña</label>  </center>  
            <br>
         <center>     <input type="password"class="controls" name="segundo" id="nombres"placeholder=><br><br>  </center>  

        <center>   <button type="submit" class="botons">INGRESAR AL SISTEMA</button>  </center> 
	
		 <br>

		<center>   <input type="reset" value="limpiar datos del formulario"/> </center>
		
        </form>
		
		<br>
			
        <form action="crear.php" method="post">
	

		
			<center><input type="submit" value="CREAR USUARIO" /></center>
		

	
	
</form>
		
        
</body>
</html>