<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Consultas aqui: </h1>
  <form method="post" action="index.html">
    <label>Destinatario: </label>
    <input type="email" name="email" require></imput><br>
    <label>Consulta: </label>
    <input type="text" require></imput><br>
    <button type="submit">enviar</button>
  </form> 

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $destinatario = $_POST["Email"];
      $asunto = $_POST["Prueba"]; 
      $cuerpo = $_POST["Mensaje"];

      $smtp_host = 'sandbox.smtp.mailtrap.io';
      $smtp_port = 25;
      $smtp_username = '1e6b7bf0df33a5';
      $smtp_password = 'c30cbe02930e55';

      $mail = mail($destinatario,$asunto,$cuerpo);
      if ($mail){
        echo "Correo enviado correctamente";
      } else {
        echo "Error al enviar el correo";
      }
    }
  ?>