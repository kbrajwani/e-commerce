<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();
$_SESSION["email"]="";

?>
<!DOCTYPE html>
<html>
<body>
<?php require 'menu1.php'; ?>

	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Login</h2>
		</div>
	</div>
	
	<!-- grow -->
<!--content-->
<div class="container">
<?php 


if($_SERVER["REQUEST_URI"]!="/bootstrapdemo/project/user/login.php")
{
echo '	<div class="alert alert-danger"> '.$_GET["error"].' </div>';
}
?>
	<div class="account">
		<div class="account-pass">
		<div class="col-md-8 account-top">
			<form action="login1.php" method="post">
				
			<div> 	
				<span>Email</span>
				<input type="email" required name="txtemail" class="form-control" placeholder="Email address"> 
			</div>
			<div> 
				<span >Password</span>
				<input type="password" required name="txtpassword" class="form-control" placeholder="password">
			</div>				
				<input type="submit" value="Login"> <br><br>
			<a href="forgetpassword.php" class="btn btn-success">forget password</a>
			</form>
			
		</div>
		<div class="col-md-4 left-account ">
			<a href="register.php"><img class="img-responsive "  src="../images/s1.jpg" alt=""></a>
			<div class="five">
			<a href="register.php" ><span>Create an account</span></a>
			</div>
			
<div class="clearfix"> </div>
		</div>
	<div class="clearfix"> </div>
	</div>
	</div>

</div>

<!--//content-->
<?php require 'footer.php'; ?>
</body>
</html>
			