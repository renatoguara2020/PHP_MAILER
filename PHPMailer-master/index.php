<?php

  require("src/PHPMailer.php");
  require("src/SMTP.php");
  require('src/Exception.php');

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    // $email->SMTPAuth = true;
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "renatoguara2020@gmail.com";
    $mail->Password = "agc";
    $mail->SetFrom("renatoguara2020@gmail.com");
    $mail->Subject = "PHP MAILER";
    $mail->Body = "HELLO WORLD COM RENATO ALVES SOARES COM PHP MAILER E NATHANZINHO";
    $mail->AddAddress("renatoguara2019@yahoo.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "<h1>Message has been sent to renatoguara2020</h1>";
     }
?>