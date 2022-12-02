<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';
require 'cred.php';

session_start();

if(isset($_POST['submit'])){


$name = $_POST['yname']; 
$email = $_POST['yemail']; 
$subject = $_POST['ysubject']; 
$message = $_POST['message']; 

$mail = new PHPMailer(true);



try {
    //Server settings
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;		                                             
    $mail->Username   = Username;                     
    $mail->Password   = Password;                                               
    $mail->SMTPSecure = 'tls';         
    $mail->Port       = 587;                           
    $mail->setFrom(Username);
    $mail->addAddress('surendradkdev@gmail.com');   
    $mail->addCC('granjeet937@gmail.com');     
    $mail->isHTML(true);                                
    $mail->Subject = $subject;
    $mail->Body    = "<html>
    <head>
          <title>DigitalCoTech</title>
          <style>
                body {
                      background-color: #999;
                }
                
                #content {
                      width: 800px;
                      border: 1px solid black;
                      margin: 0 auto;
                }
                p{
                  font-size:18px;
                }
             
          </style>
    </head>
    <body style='background-color: #999;'>
          <div id='content' style='padding: 2%'>           
               <p>Name - .$name.</p>
               <p>Email - .$email.</p>
               <p>Subject - .$subject.</p>
               <p>Message - .$message.</p>
              
          </div>
    </body>
    </html>";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->Send();
//
    $_SESSION['flash_message'] = "Your Message has been sent.";
    header("Location:contact-us.php");
// echo "<script> location.href='/contact-us.php'<script>";
} catch (Exception $e) {
    $_SESSION['flash_message'] = "Message could not be sent.";
    header("Location:contact-us.php");
}
}
?>