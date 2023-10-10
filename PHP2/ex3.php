<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sitio de recomendacion.</title>

</head>
<body>
<h1>recomiende a un amigo: </h1>
  <form method="post" action="index.php"> 
    <label>Nombre</label>
    <input name="name" type="text" required></input><br>
    <label>Email a quien recomendar</label>
    <input name="email" type="email" required></input><br>
    <button>Enviar</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = "Recomendacion";
    $body = "Hola $name, te recomiendo este sitio web: https://www.youtube.com/watch?v=QH2-TGUlwu4";
    $headers = "From: $email";

    $smtp_host = 'sandbox.smtp.mailtrap.io';
    $smtp_port = 25;
    $smtp_username = '1e6b7bf0df33a5';
    $smtp_password = 'c30cbe02930e55';

    $mail=mail($email,$subject,$body,$headers);
    if ($mail){
      echo "Correo enviado correctamente";
    } else {
      echo "Error al enviar el correo";
    }
  }
  ?>
</body>
</html>