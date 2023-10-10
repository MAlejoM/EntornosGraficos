<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hola buenas</h1>
  <form method="post" action="index.html">
    <label>Destinatario: </label>
    <input type="email" name="email">
    <button type="submit">enviar</button>
  </form> 

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $destinatario = $_POST["email"];
      $asunto = "Prueba"; 
      $cuerpo = "Esto es una prueba de envío de correo a través del servidor";
      $mail=mail($destinatario,$asunto,$cuerpo);
      
      $smtp_host = 'sandbox.smtp.mailtrap.io';
      $smtp_port = 25;
      $smtp_username = '1e6b7bf0df33a5';
      $smtp_password = 'c30cbe02930e55';
      
      
      if ($mail){
        echo "Correo enviado correctamente";
      } else {
        echo "Error al enviar el correo";
      }
    }
  ?>
</body>
</html>