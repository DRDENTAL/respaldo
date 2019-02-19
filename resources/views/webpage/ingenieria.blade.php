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

      <img src="img/icologo.png" alt="" class="responsive-img" style="width: 120px; height: 60px;">

        <ul id='dropdown1' class='dropdown-content' style="background-color: #2DDB2D;">
          <li><a href="servicios.php" style="color: #ffffff">ERNC</a></li>
          <li><a href="servicios.php" style="color: #ffffff">INDUSTRIAL</a></li>
          <li><a href="servicios.php" style="color: #ffffff">AUTOMATIZACIÓN</a></li>
        </ul>

        <ul class="dropdown-content" id="comp-menu3">
          <li><a href="servicios.php">ERNC</a></li>
          <li><a href="servicios.php">INDUSTRIAL</a></li>
          <li><a href="servicios.php">AUTOMATIZACIÓN</a></li>
        </ul>

        <ul class="right hide-on-med-and-down">
          <li><a href="/">Inicio</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="ingenieria.php">Ingeniería</a></li>
          <li><a class='dropdown-button' href='#' data-activates='dropdown1'>Nuestros Servicios</a></li>
          <li><a href="ofertas.php">Nuevas Ofertas</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav" style="background-color: #2DDB2D;">
          <li><a href="/">Inicio</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li><a href="ingenieria.php">Ingeniería</a></li>
          <li><a href="#" data-activates="comp-menu3" class="dropdown-button">Servicios</a></li>
          <li><a href="ofertas.php">Nuevas Ofertas</a></li>
        </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>


 <div class="row">
  <div class="section">
  <div class="container">
    <div class="table">
      <br>
      <br>
      <div class="col">

     
              <div class="container">
                <div class="col s12 m4 l4 left-align">    
                <div class="card">
                    <img src="img/productos/electro.jpg"  class="responsive-img materialboxed" >
                  </div>
                  </div>              
                </div>    
              <div class="container">
                <div class="col s8 m8 center-align">
                    <div class="icon-block left-align">
                       

                          <h5 class="light"  style="color: ##25D366;" >Autoenergy Spa</h5><br>

                            <h6><span>Desarrollamos ingeniería conceptual, básica y detalles de área eléctrica y mecánica.</span></h6><br>
                              <br><h6><span>Realizamos asesoria técnica e inspección de obras eléctricas y procesos e integración de tecnología en la industria.</span></h6><br>
                              <br><h6><span>Somos integradores de automatización y control industrial de marcas reconocidas en el mercado para la industria y agroindustria.</span></h6><br>
                              <br><h6><span>Diseñamos máquinas a pedido para procesos de la agroindustria.</span></h6>
                       
                    </div>     
                  </div>
                </div>
              
                


</div>
          </div>
</div>
       
</div>
</div>

<footer class="page-footer" style="background-color: #2DDB2D;">
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
            
          <div class="col s5 m5 left-align">
            <b>Todos los derechos reservados a </b><a class="grey-text text-darken-4" href="/"><br><b>AutoEnergy Ingeniería y Servicios SPA</b></a> 
          </div>
          <div class="col s7 m7 right-align"><b>Fono Contacto +569 - 48740003</b></div>
<br>
          <a href="contacto.php" class="right" style="color:#FFFFFF;"><b>CONTACTO.AUTOENERGY@GMAIL.COM</b></a>
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
    $(document).ready(function(e){
      $('.dropdown-button').dropdown();
    });
  </script>
 
  
  <script type="text/javascript">
     $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
      $(document).ready(function(){
        $('.dropdown-button').dropdown();
      $('.carousel').carousel();
      $('.slider').slider();
      $('.button-collapse').sideNav();
  });
      
  </script>

  </body>
</html>