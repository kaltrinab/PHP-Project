
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'C:\xampp\htdocs\PHP-Projekti\PHPMailer-master\vendor\autoload.php';
$mailto=$_POST['email'];
$mailSub=$_POST['subject'];
$mailMsg=$_POST['comment'];


$mail=new PHPMailer();
try{
$mail->isSMTP();
$mail->SMTPDebug =0;                                                                  
$mail->SMTPAuth =true;    
$mail->SMTPSecure ='ssl';                                                                      
$mail->Host ='smtp.gmail.com';  
$mail->Port = 465;
$mail->IsHTML(true);
$mail->Username ='';
$mail->Password ='';
$mail->SetFrom('');
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->AddAddress($mailto);
$mail->send();

}
catch (Exception $e) {
  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}



if(!$mail->send())
{
   echo "Mail Not Sent";
}
else
{
   echo "Mail Sent";
}




?>