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
    $mail->Password = "ag";
    $mail->SetFrom("renatoguara2020@gmail.com");
    $mail->Subject = "PHP MAILER";
    $mail->Body = "hello RENATO ALVES SOARES COM PHP MAILER";
    $mail->AddAddress("renatoguara2020@gmal.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>