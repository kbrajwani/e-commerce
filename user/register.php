<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <?php
    require 'menu1.php';
    ?>
    <body>
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Register</h2>
		</div>
	</div>
	<!-- grow -->
<!--content-->
<div class=" container">
<div class=" register">
	
		  	  <form action="register1.php" method="post" enctype="multipart/form-data">
				 <div class="col-md-6 register-top-grid">
					<h3>Personal infomation</h3>
					 <div>
						<span>First Name</span>
						<input type="text" name="txtname" required class="form-control" placeholder="first name"> 
					 </div>
					 <div>
						<span>Address</span>
						<input type="text" name="txtaddress" required  class="form-control" placeholder="address"> 
					 </div>
					 <div>
						<span>gender</span>
      					<span class="input-group form-control" >
       				    <input type="radio" name="txtgender" checked value="male" aria-label="...">male     
       					<input type="radio" name="txtgender" value="female" aria-label="...">female
      					</span>
    				</div>
						<div>
							<span>image</span>
							<input type="file" name="txtimage"  class="form-control"/>
							</div>
						 				
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="col-md-6 register-bottom-grid">
						    <h3>Login information</h3>
							
							<div>
						 <span>Email Address</span>
						 <input type="email" name="txtemail" required  class="form-control" placeholder="email address"> 
					        </div>						 
						    <div>
						 <span>mobile</span>
						 <input type="number" required  name="txtmobile" class="form-control" placeholder="mobile"> 
					 		</div>
							 
							 <div>
								<span>Password</span>
								<input type="password"  required pattern=".{6,15}"  name="txtpassword" class="form-control" placeholder="password character 6 to 15">
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
			