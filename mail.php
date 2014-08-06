<?php
require("php-mailer/class.phpmailer.php");



$mail = new PHPMailer(); 

$mail->SMTPDebug = 1;
$mail->IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "contato@hashweb.com.br"; // SMTP username
$mail->Password = "artemiscontato"; // SMTP password
$webmaster_email = "contato@hashweb.com.br"; //Reply to this email ID
$email= "contato@hashweb.com.br"; // Recipient's name; // Recipients email ID
$name = $_POST['name']; // Recipient's name
$emailContato =$_POST['email'];
$telefone = $_POST['telefone'];
$msg = $_POST['msg'];
$mail->From = $webmaster_email;
$mail->FromName = "CONTATO PELO SITE";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"CONTATO PELO SITE");
$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML
$mail->Subject = "TESTE DE EMAIL";


$mail->Body = "Nome = $name.
			   Telefone = $telefone
			   E-mail = $emailContato
			   Mensagem = $msg";
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}

?>