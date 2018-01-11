<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?php
$_email11=$_name=$_password=$_mobile=$_address=$_gender=$_image="";
$_email11=$_GET["email"];
if($_email11===null)
{
header('location:login.php');
}
$_token=$_GET["token"];
require 'loginclass.php';
$obj=new loginclass();
$result=$obj->userview($_email11);
$row=$result->fetch_assoc();
$_name=$row["uname"];
$_password=$row["password"];
$_mobile=$row["mobile_no"];
$_address=$row["address"];
$_gender=$row["gender"];
$_image=$row["image"];
?>

      <?php session_start();
	
require 'menu1.php';

	
?>


    <body>
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>CHANGE PASSWORD</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class=" container">
<div class=" register">
	
		  	  <form action="newpass1.php?email=<?php echo $_email11; ?>&token=<?php echo $_token; ?>" method="post" enctype="multipart/form-data">
				 <div class="col-md-12 register-bottom-grid">
					
					 				
                            <div>
						 <span>new Password</span><br>
						 <input type="text"  name="txtpassword2" class="form-control" placeholder="new password" >
							</div><br>
                            <div>
						 <span>confirm Password</span><br>
						 <input type="text"  name="txtpassword3" class="form-control" placeholder="confirm password" >
							</div>							 
						 <input type="submit" value="submit">	
					        </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
</div>
<!--//content-->
<?php require 'footer.php'; ?>
</body>
</html>
			