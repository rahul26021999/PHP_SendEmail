<?php
require 'PHPMailer.php';
require 'SMTP.php';
$mail = new PHPMailer(true);
$send_using_gmail=true;
//Send mail using gmail
if($send_using_gmail){
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPDebug = true;
    $mail->SMTPDebug = 2; 
    $mail->Debugoutput = 'html';

                            // sets GMAIL as the SMTP server
    $mail->Mailer = "smtp";
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->Host = "tls://smtp.gmail.com";
    $mail->SMTPSecure = "tls"; // sets the prefix to the servier
    $mail->Port = 587; // set the SMTP port for the GMAIL server
    $mail->Username = "rahul26021999@gmail.com"; // GMAIL username
    $mail->Password = "sunderpura"; // GMAIL password
}

//Typical mail data
$mail->AddAddress("rahul26021999@gmail.com", "tanya garg");
$mail->SetFrom("rahul26021999@gmail.com", "Rahul gupta");
$mail->Subject = "My Subject";
$mail->Body = "Hello rahul ko mail aja na please";

try{
    $mail->Send();
    echo '<pre>';
    echo print_r($mail);
    echo '</pre>';
    echo "Success!";
} catch(Exception $e){
    //Something went bad
    echo '<pre>';
    echo "Fail - " . $mail->ErrorInfo;
    echo '</pre>';
}

?>
