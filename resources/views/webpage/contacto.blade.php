
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>AUTOENERGY</title>

  <!-- CSS  -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialicon.css" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  
  
  
  
</head>
<body>

 <nav class="navigation" style="background-color: #2DDB2D;" role="navigation">
    <div class="nav-wrapper container">
      
         <img src="img/icologo.png" alt="" class="responsive-img" style="width: 120px; height: 70px;">
     


  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content' style="background-color: #2DDB2D;">
    
    <li><a href="servicios.php" style="color: #ffffff">ERNC</a></li>
    <li><a href="servicios.php" style="color: #ffffff">INDUSTRIAL</a></li>
    <li><a href="servicios.php" style="color: #ffffff">AGRÍCOLA</a></li>
    <!--
    <li class="divider"></li>
    <li><a href="servicios.php" style="color: #ffffff">OTROS</a></li>-->
  </ul>


      <ul class="dropdown-content" id="comp-menu3">
        
        <li><a href="servicios.php">ERNC</a></li>
          <li><a href="servicios.php">INDUSTRIAL</a></li>
          <li><a href="servicios.php">AGRÍCOLA</a></li>
      </ul>
     
      <!--<a id="logo-container" href="#" class="brand-logo">Logo</a>-->
      
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Inicio</a></li>
         <!--<li><a href="#" data-activates="comp-menu3" class="dropdown-button btn">Servicios</a></li>-->
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="ingenieria.php">Ingeniería</a></li>
        <li><a class='dropdown-button' href='#' data-activates='dropdown1'>Nuestros Servicios</a></li>
        <li><a href="ofertas.php">Nuevas Ofertas</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav" style="background-color: #2DDB2D;">
        <li><a href="index.php">Inicio</a></li>
        
        
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="#" data-activates="comp-menu3" class="dropdown-button">Servicios</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <div class="container">
    <div class="section">

      <div class="row center">
         
         <div class="row">
    
      <section class="container">
    <div class="row">
    <h3 class="center-align" style="color: #25D366;">CONTACTO</h3>
      <article class="offset-s3">

        <form role="form" method="POST" action="sendmail" enctype="multipart/form-data">
          {{ csrf_field() }}


          <div class="col s6 m6">
          <div class="input-field">
            <i class="material-icons prefix" style="color: #25D366;">perm_identity</i>
            <label for="nombre" style="color: #25D366;">Nombres</label>
            <input type="text" name="nombre" required>
          </div>
          </div>

          <div class="col s6 m6">
          <div class="input-field">
            <i class="material-icons prefix" style="color: #25D366;">person_pin</i>
            <label for="apellido" style="color: #25D366;">Apellidos</label>
            <input type="text" name="apellido"  required>
          </div>
          </div>

          <div class="col s6 m6">
          <div class="input-field">
            <i class="material-icons prefix" style="color: #25D366;">email</i>
            <label for="email" style="color: #25D366;">Email</label>
            <input type="email" name="email"  required>
          </div>
          </div>
          <div class="col s6 m6">
          <div class="input-field">
            <i class="material-icons prefix" style="color: #25D366;">phone</i>
            <label for="number" style="color: #25D366;">Teléfono</label>
            <input type="number" name="telefono"  required>
          </div>
          </div>

          <div class="col s12 m12">
          <div class="input-field">
            <i class="material-icons prefix" style="color: #25D366;">mode_edit</i>
            <label for="mensaje" style="color: #25D366;">Mensaje</label>
            <textarea name="mensaje"  rows="10" class="materialize-textarea"  length="140" required></textarea>
          </div>
          </div>
        

          <p class="center-align">
            <button onclick="M.toast()" class="waves-effect waves-light btn" name="submit" id="submit" type="submit" style="background-color: #2DDB2D;"><i class="material-icons right" >send</i>enviar</button>
          </p>

        </form>

      </article>
    </div>
  </section>
      
    
  </div>

        
      </div>

    </div>
  </div>

<footer class="page-footer" style="background-color: #2DDB2D;">
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
            
 <div class="col s5 m5 left-align">
      <b>Todos los derechos reservados a </b><a class="grey-text text-darken-4" href="index.php"><br><b>AutoEnergy Ingeniería y Servicios SPA</b></a> </div>
            <div class="col s7 m7 right-align"><b>Fono Contacto +569 - 48740003</b>
               </div>
      
      </div>
    </div>
  </footer>


  <!--  Scripts-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/materialize.min.js"></script>
  
 
 
  
  <script type="text/javascript">
     $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
      $(document).ready(function(){
      $('.carousel').carousel();
      $('.slider').slider();
  });
      
       var toastHTML = '<span>me toste</span><button class="btn-flat toast-action">Salir</button>';
       M.toast({html: toastHTML});
      
  </script>

  </body>
</html>