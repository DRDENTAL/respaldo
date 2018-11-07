<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>correo</title>
   <style>

   .titulo {
    color: #1e80b6;
    padding-top: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;
    }

    .body{
     background-color: #ECECEC;	
    }


    .div_contenido{
    color: #1e80b6;
    padding-top: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;
    background-color: #ffffff !important;
   }

   </style>

</head> 

<body class="body">

<div class="titulo" > <h1>Información Contacto AutoEnergy</h1></div>
<hr>
<div class="card">
    <div class="row">
        
        <div class="card-panel">
            <?php 
            $email = $_POST['email'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $mensaje = $_POST['mensaje'];
?>
<?php
            echo $email; 
            ?> <br>
           <?php echo $nombre;
         ?> <br>
         <?php   
            echo $apellido;
       ?> <br>
       <?php
            echo $telefono;
     ?>       <br>
<?php
            echo $mensaje;

?>
        </div>
    </div>
</div>

<div class=".div_contenido" style="background-color: #2DDB2D;"> Gracias por participar contactarte con nosotros <br/> NO OLVIDE VISITAR NUESTRO SISTIO WEB <b>http://www.autoenergy.cl</b> </div>
	
</body>
</html>