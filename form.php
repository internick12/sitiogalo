<?php session_start(); ?>

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
            <span class="subheading">Contáctame</span>
            <h2 class="mb-4">Contáctame</h2>
            <p>Con tan solo unos clic's podremos estar en contacto</p>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="salvado.php" method="post" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Tu Nombre"
									<?php 
										if(!empty($_SESSION['nombre_lleno'])){
											echo "value='".$_SESSION['nombre_lleno']."'";
											unset($_SESSION['nombre_lleno']);
										}
									?>
								>
								<?php 
									if(!empty($_SESSION['nombre_vacio'])){
										echo "<p style='color : #1f6a9d; '>".$_SESSION['nombre_vacio']."</p>";
										unset($_SESSION['nombre_vacio']);
									}
								?>
								
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Tu Email"
								<?php 
										if(!empty($_SESSION['email_lleno'])){
											echo "value='".$_SESSION['email_lleno']."'";
											unset($_SESSION['email_lleno']);
										}
									?>
								>
								<?php 
									if(!empty($_SESSION['email_vacio'])){
										echo "<p style='color : #1f6a9d; '>".$_SESSION['email_vacio']."</p>";
										unset($_SESSION['email_vacio']);
									}
								?>
              </div>
              <div class="form-group">
                <input type="text" name="asunto" class="form-control" placeholder="Asunto"
								<?php 
										if(!empty($_SESSION['asunto_lleno'])){
											echo "value='".$_SESSION['asunto_lleno']."'";
											unset($_SESSION['asunto_lleno']);
										}
									?>
								>
								<?php 
									if(!empty($_SESSION['asunto_vacio'])){
										echo "<p style='color : #1f6a9d; '>".$_SESSION['asunto_vacio']."</p>";
										unset($_SESSION['asunto_vacio']);
									}
								?>
              </div>
              <div class="form-group">
							    <?php 
										if(!empty($_SESSION['mensaje_lleno'])){ ?>
											<textarea  id="" cols="30" rows="7" name="mensaje" class="form-control" placeholder="Mensaje">
												<?php echo $_SESSION['mensaje_lleno'];?>
											</textarea>
										  <?php
											unset($_SESSION['mensaje_lleno']);
										} else { ?>
											<textarea  id="" cols="30" rows="7" name="mensaje" class="form-control" placeholder="Mensaje"></textarea>
										<?php }
									?>	
                  	
								<?php 
									if(!empty($_SESSION['mensaje_vacio'])){
										echo "<p style='color : #1f6a9d; '>".$_SESSION['mensaje_vacio']."</p>";
										unset($_SESSION['mensaje_vacio']);
									}
								?>

                <input type="submit" value="Contactar" class="btn btn-primary py-3 px-5">
							</div>
            </form>
					
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(images/about.jpg);"></div>
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