
<?php
use PHPMailer\PHPMailer\PHPMailer;


require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);



$alert = '';


if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject= $_POST['subject'];
  $message= $_POST['message'];
  $phone = $_POST['phone'];
  

  try{
    
    $mail->isSMTP();
    
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'Emad90.Mustafa@gmail.com ';
    $mail->Password = 'emadAFRIN1990$'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';
    $mail->setFrom('Emad90.Mustafa@gmail.com '); 
    $mail->addAddress('Emad90.Mustafa@gmail.com '); 
    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email  <br>subject : $subject  <br> phone : $phone <br> Message : $message   <br> </h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span> votre message a bien été envoyé.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}


?>





      
      