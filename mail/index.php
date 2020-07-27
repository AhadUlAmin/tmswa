<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

//require 'src/Exception.php';
require 'src/PHPMailer.php';

function sendmail($to,  $DocumentText, $DocumentTitle){



//require 'src/SMTP.php';

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "info@themornstar.com";
$mail->FromName = "TheMornStar";

//To address and name
//$mail->addAddress("mdahadaminul@gmail.com", "Muhammad Ahad Aminul");
$mail->addAddress($to); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("info@themornstar.com", "Reply");



//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "TheMornStar- ".$DocumentTitle;
$mail->Body = "<h1>TheMornStar Email Body</h1>".$DocumentText;
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}

}