<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Niko - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
			
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <?php 

              session_start();

              $para ='internick10@gmail.com'; //utiliza tu propia dirección email


              $nombre = $_POST['nombre'];
              if(empty($_POST['nombre'])){
                $_SESSION['nombre_vacio'] = "Campo nombre obligatorio";
                $url = "http://localhost/galo/form.php";
                echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'";
              } else {
                $_SESSION['nombre_lleno'] = $_POST['nombre'];
              }

              $email = $_POST['email'];
              if(empty($_POST['email'])){
                $_SESSION['email_vacio'] = "Campo email obligatorio";
                $url = "http://localhost/galo/form.php";
                echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'";
              } else {
                $_SESSION['email_lleno'] = $_POST['email'];
              }

              $asunto = $_POST['asunto'];
              if(empty($_POST['asunto'])){
                $_SESSION['asunto_vacio'] = "Campo asunto obligatorio";
                $url = "http://localhost/galo/form.php";
                echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'";
              } else {
                $_SESSION['asunto_lleno'] = $_POST['asunto'];
              }

              $mensaje = $_POST['mensaje'];
              if(empty($_POST['mensaje'])){
                $_SESSION['mensaje_vacio'] = "Campo mensaje obligatorio";
                $url = "http://localhost/galo/form.php";
                echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'";
              } else {
                $_SESSION['mensaje_lleno'] = $_POST['mensaje'];
              }
              //envio de email

              //Construir el mensaje
              $mimensaje = "Nombre: $nombre\n\n";
              $mimensaje .= "Email: $email\n\n";
              $mimensaje .= "Comentario: $mensaje\n\n";
              
              //Limitar tamaño de línea a 70 caracteres
              $mimensaje = wordwrap($mensaje, 70);
              
              //Enviarlo
              $enviarMail = mail ($para, $asunto, $mimensaje);
	  
?>

            ?>
            <span class="subheading">Gracias</span>
            <h2 class="mb-4">Mensaje Enviado</h2>
            <p>Gracias por tus comentarios en breve me comunicaré contigo</p>
          </div>
        </div>
      </div>
    </section>
	
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>