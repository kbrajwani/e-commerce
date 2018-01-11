<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_email="";
    $_name="";
    $_password="";
    $_mobile="";
    $_address="";
    $_gender="";
    $_image1="";
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_password=$_POST["txtpassword"];
if($_email==null || $_password==null)
{
    header('location:register.php');
    exit;
}
$_mobile=$_POST["txtmobile"];
$_address=$_POST["txtaddress"];
$_gender=$_POST["txtgender"];
$target_dir="../userimg/";
$target_file=$target_dir.basename($_FILES["txtimage"]["name"]);

if(move_uploaded_file($_FILES["txtimage"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_image1="userimg/".basename($_FILES["txtimage"]["name"]);
if($_image1=="userimg/")
{
    if($_gender=="male")
    {
        $_image1="userimg/avatar.png";
    }
    else
    {
        $_image1="userimg/avatar3.png";
    }
}
$string=md5(rand());
    $token=substr($string,0,10);
require 'loginclass.php';
$obj=new loginclass();
$_result=$obj->insert($_email,$_name,$_password,$_mobile,$_address,$_gender,$_image1,$token);

if($_result===true)
{
    
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "../phpmailer/class.phpmailer.php";
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
$mail->Subject = ' verification ';

// Sender email address and name
$mail->SetFrom('maildemo254@gmail.com', 'verification account link');

$email1=$_email;
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
    $msg = 'Mail send successfully please verify your account <a href="https://mail.google.com/" target="_blank">click me to verify</a>';
    
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}
echo $msg;

    header('location:login.php');
}
else
{
    echo "Not Successfull";
}

}

?>