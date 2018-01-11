<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "../phpmailer/class.phpmailer.php";

$email=$_GET["email"];
$con=new mysqli('localhost','root','','mattress');
$res=$con->query("select * from user_tbl where email='".$email."'");
if($res->num_rows==1)
{
$row=$res->fetch_assoc();
$token=$row["token1"];
}
$message='please verify your account <br><a href="localhost/bootstrapdemo/project/user/verify.php?token='.$token.'&email='.$email.'">click me</a>';

// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 0;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = 'maildemo254@gmail.com';

// your password must be enclosed in single quotes
$mail->Password = 'maildemo1234';

// add a subject line
$mail->Subject = ' password ';

// Sender email address and name
$mail->SetFrom('maildemo254@gmail.com', 'verification link');

$email1=$email;
// reciever address, person you want to send
$mail->AddAddress($email1);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
    // send mail
	
	//don't forget to enable openssl true from php_extensions
    $mail->Send();
    $msg = 'Mail send successfully please look your account <a href="https://mail.google.com/" target="_blank">click me to change password</a>';
    
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}
echo $msg;

?>
