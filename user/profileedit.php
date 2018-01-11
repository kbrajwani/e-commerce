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
		  	  <form action="profileedit1.php?id=<?php echo $_image;?>" method="post" enctype="multipart/form-data">
				 <div class="col-md-6 register-top-grid">
					
					 <div>
						<span>First Name</span>
						<input type="text"  name="txtname" class="form-control" value="<?php echo $_name; ?>" placeholder="first name"> 
					 </div>
					 <div>
						<span>Address</span>
						<input type="text"  name="txtaddress" class="form-control" placeholder="address" value="<?php echo $_address; ?>"> 
					 </div>
					 <div>
						<span>gender</span>
      					<span class="input-group form-control" >
       				    <input type="radio" name="txtgender" value="male" aria-label="..."
                           <?php if($_gender=="male"){echo 'checked'; }?> >male     
       					<input type="radio" name="txtgender" value="female" aria-label="..."
                           <?php if($_gender=="female"){echo 'checked'; }?>>female
      					</span>
                          </span>
    				</div>
					<div>
						 <span>mobile</span>
						 <input type="text"  name="txtmobile" class="form-control" placeholder="mobile" value="<?php echo $_mobile; ?>"> 
					 		</div>						 				
					   
					 </div>
				     <div class="col-md-6 register-bottom-grid">
						    
							
							<div>
                                <span>image</span>
							<img src="<?php echo "../".$_image; ?>"> 
							<input type="file" name="txtimage"  class="form-control"/>
						    </div>						 
						    <br>							 
													 
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
			