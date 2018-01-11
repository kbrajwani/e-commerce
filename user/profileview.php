<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
      <?php session_start();
	
if($_SESSION["email"]==null)
{header('location:login.php');}
else
{
require 'menulogout.php';
}
	
?>
<?php
$_email11=$_name=$_password=$_mobile=$_address=$_gender=$_image="";
$_email11=$_SESSION["email"];
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


    <body>
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>view profile</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class=" container">
<div class=" register">
	<center><h3>Personal infomation</h3></center><br><hr>
		  	  <form action="profileedit.php" method="post" enctype="multipart/form-data">
				 <div class="col-md-6 register-top-grid">
					
					 <div>
						<span>First Name</span>
						<input type="text" readonly name="txtname" class="form-control" value="<?php echo $_name; ?>" placeholder="first name"> 
					 </div>
					 <div>
						<span>Address</span>
						<input type="text" readonly name="txtaddress" class="form-control" placeholder="address" value="<?php echo $_address; ?>"> 
					 </div>
					 <div>
						<span>gender</span>
      					<input type="text" readonly name="txtgender" class="form-control" placeholder="address" value="<?php echo $_gender; ?>"> 
                          </span>
    				</div>
						<div>
                            <span>Email Address</span>
						 <input type="email" readonly name="txtemail" class="form-control" placeholder="email address" value="<?php echo $_email11; ?>"> 
					     
							</div>
						 				
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="col-md-6 register-bottom-grid">
						    
							
							<div>
                                <span>image</span><br>
							<img src="<?php echo "../".$_image; ?>"> 
							
						    </div><br>						 
						    <div>
						 <span>mobile</span>
						 <input type="text" readonly name="txtmobile" class="form-control" placeholder="mobile" value="<?php echo $_mobile; ?>"> 
					 		</div>					<br>		 
														 
						 <input type="submit" value="edit">	
					        </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
</div>
<!--//content-->
<?php require 'footer.php'; ?>
</body>
</html>
			