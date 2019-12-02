<?php if (array_key_exists ('enviar', $_POST)) {
      //script para procesar mail
	  $para ='internick10@gmail.com'; //utiliza tu propia dirección email
	  $asunto = 'Cuestionario enviado por Usuario';
	  
	  //Procesar las variables $_POST
	  $nombre = $_POST['nombre'];
	  $email = $_POST['email'];
	  $comentario = $_POST['comentario'];
	  
	  //Construir el mensaje
	  $mensaje = "Nombre: $nombre\n\n";
	  $mensaje .= "Email: $email\n\n";
	  $mensaje .= "Comentario: $comentario\n\n";
	  
	  //Limitar tamaño de línea a 70 caracteres
	  $mensaje = wordwrap($mensaje, 70);
	  
	  //Enviarlo
	  $enviarMail = mail ($para, $asunto, $mensaje);
	  }	  
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacto</title>
<link href="contacto.css" rel="stylesheet" type="text/css" />

</head>

<body>
<h1>Envía Un Comentario</h1>


<?php if ($_POST && !$enviarMail) {
?>
<p class="advertencia"> Lo sentimos, ha habido un problema en el envío del mensaje. </p>
<?php
}
elseif ($_POST && $enviarMail) {
?>
<p><strong> Su mensaje ha sido enviado. Gracias por sus comentarios.</strong></p>
<?php }?> 



<p>Agradecemos los comentarios que nos pueda enviar. Por favor usa el siguiente formulario para hacernos saber lo que piensas de nuestro sitio.</p>
<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <p>&nbsp;</p>
  <fieldset>
  <legend>Tus datos</legend>
  <p>
    <label for="nombre">Nombre:</label>
    
    <input name="nombre" type="text" class="textInput" id="nombre" />
    </p>
  <p>
    <label for="email">Email:</label>
    <input name="email" type="text" class="textInput" id="email" />
  </p>
  </fieldset>
  <fieldset>
  <legend>Tus Opiniones</legend>
  <p>
    <label for="comentario">Comentario:</label>
    <textarea name="comentario" cols="45" rows="4" id="comentario"></textarea>
  </p>
  <p><strong>¿Sobre qué temas quieres los próximos Cursos?</strong></p>
  <div class="cheq">
    <p>
      <input name="curso[]" type="checkbox" id="cursoFlash" value="Curso Flash" />
      <label for="cursoFlash">Curso de Flash</label>
    </p>
    <p>
      <input name="curso[]" type="checkbox" id="cursoror" value="Curso ROR" />
      <label for="cursoror">Curso de ROR</label>
    </p>
    <p>
      <input name="curso[]" type="checkbox" id="cursosmarty" value="curso smarty" />
      <label for="cursosmarty">Curso de Smarty</label>
    </p>
  </div>
  <div class="cheq">
    <p>
      <input name="curso[]" type="checkbox" id="cursosimfony" value="curso simfony" />
      <label for="cursosimfony">Curso de Simfony</label>
    </p>
    <p>
      <input name="curso[]" type="checkbox" id="cursoposer" value="curso poser" />
      <label for="cursoposer">Curso de Poser</label>
    </p>
  </div>
  <p class="clearIt">
    <label for="visitas">¿Cuántas veces visitas este sitio?</label>
    <select name="visitas" id="visitas">
      <option value="" selected="selected">Selecciona uno</option>
      <option value="nunca">Nunca Antes</option>
      <option value="varias">Varias Veces</option>
      <option value="bastantes">Bastantes Veces</option>
      <option value="diario">Todos los días</option>
    </select>
  </p>
  <p>
    <label for="preferencias">¿Qué temas te interesan más?</label>
    <select name="preferencias[]" size="6" multiple="multiple" id="preferencias">
      <option value="dise">Diseño</option>
      <option value="program">Programación</option>
      <option value="web">Web</option>
      <option value="juegos">Juegos</option>
      <option value="educa">Educativos</option>
      <option value="multimedia">Multimedia</option>
    </select>
  </p>
  <p><strong>¿Quieres recibir noticias del sitio?</strong></p>
  <div class="cheq">
    <p>
      <input type="radio" name="suscribe" id="suscribeSi" value="S" />
      <label for="suscribeSi">Sí</label> 
      <input type="radio" name="suscribir" id="suscribeNo" value="n" />
      <label for="suscribeNo">No</label>
    </p>
  </div>
  <p class="clearIt">
  </fieldset>
    <label for="enviar"></label>
    <input name="enviar" type="submit" class="clearIt" id="enviar" value="Enviar Comentario" />
  </p>
  
</form>

</body>
</html>