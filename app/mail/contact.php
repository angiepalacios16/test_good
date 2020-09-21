<?php
require("../../libraries/libphp-phpmailer/class.phpmailer.php");
require("../../libraries/libphp-phpmailer/class.smtp.php");
if (isset($_POST['mail'])) {

$name = $_POST['name'];
$mail = $_POST['mail'];
$coment = $_POST['coment'];
$email_subject = 'Test tecnical good';
$email_body = '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/index.css">
  <title>Test Good</title>
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #404040;
    }

    li h2 {
      display: block;
      color: white;
      text-align: center;
      text-decoration: none;
      color: #ffffff;
    }

    h3 {
      color: #0274d8b9;
      display:inline;
    }

    p {
      display:inline;
    }

    div {
      background-color: #e1e1d0;
      padding: 20px;
      font-size: 1.5rem;
    }
  </style>
</head>

<body>
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead ">
      <div class="inner">
        
        <ul>
          <li><h2 class="masthead-brand text-primary">Test Good</h2></li>
        </ul>
      </div>
    </header>
    <div>
      <h3>Nombre:</h3>
      <p>' . $name . '</p>
      <br>
      <h3>Comentario:</h3>
      <br>
      <p>' . $coment . '</p>
    </div>
  </div>
</body>
</html>';
$oMail = new PHPMailer;
$oMail->setFrom('angie.c.palacios.p@gmail.com');
$oMail->addAddress($mail);
$oMail->Subject = $email_subject;
$oMail->isHTML(true);
$oMail->Body = $email_body;
$oMail->isSMTP();
$oMail->SMTPSecure = 'ssl';
$oMail->Host = 'ssl://smtp.gmail.com';
$oMail->SMTPAuth = true;
$oMail->Port = 465;
$oMail->Username = 'angie.c.palacios.p@gmail.com';
$oMail->Password = 'angie123*';
if (!$oMail->send()) {
  echo "<script type='text/javascript'>
        alert('Error para enviar');
        location='../../index.php';
        </script>";
  print 'error';
} else {
  echo "<script type='text/javascript'>
        alert('Correo enviado exitosamente');
        location='../../index.php';
        </script>";
}
}
else{
  echo "<script type='text/javascript'>
        alert('Debes completar todos los campos');
        location='../../index.php';
        </script>";
}