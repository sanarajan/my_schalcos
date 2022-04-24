
<?php
require 'Mailer/class.phpmailer.php';
require 'Mailer/PHPMailerAutoload.php';


$be_mail_server ='smtp.gmail.com';
$be_mail_port ='587';
$be_mail_emailid ='alerts4expodine@gmail.com';
$be_mail_password ='explore@sms@4123';
$be_mail_secure ='TLS';
$be_mail_from    =$email;
$Body="";
        // prepare email body text
        $Body .= "Name: ";
        $Body .= $name;
        $Body .= "\n";

        $Body .= "Phone: ";
        $Body .= $phone;
        $Body .= "\n";
        
        $Body .= "Email: ";
        $Body .= $email;
        $Body .= "\n";
        
        $Body .= "Message: ";
        $Body .= $message;
        $Body .= "\n";

$mail = new PHPMailer();
        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->SMTPSecure = $be_mail_secure;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );        
       
         $from_name=$name;      
        $mail->Host = $be_mail_server;
        $mail->SMTPAuth = true;
        $mail->Username = $be_mail_emailid;
        $mail->Password = $be_mail_password;
        $mail->Port = $be_mail_port;
        $mail->SetFrom($be_mail_from,$from_name);
        $mail->Subject = "Enquiry from Schalcos";
        $mail->Body = $Body;
         // $mail->addAttachment($filename.'.txt');
         //$mail->addBCC('info@expodine.com');
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

       
       // $emls=explode(",",$allmail);
 
 
  $mail->AddAddress('sanamol87@gmail.com');
 
   
       
        if(!$mail->send()) {
           // $success='invalid';
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
             echo 'success';
          
        }
        ?>