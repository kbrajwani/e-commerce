
<!DOCTYPE html>
<html>
<body>
<?php session_start();
	
if($_SESSION["email"]==null)
{
  require 'menu1.php';}
else
{
require 'menulogout.php';
}
	
?>
<br>
<section class="container">

      <div class="error-page">
        <h2 class="headline text-red">500</h2>
<font color="red">
        <div class="error-content">
          <h3><i class="font-warninng text-red"></i> Oops! Something went wrong.</h3>

</font>          <p>
            We will work on fixing that right away.
            Meanwhile, you may <a href="index.php">return to dashboard</a> or try using the search form.
          </p>

                  </div>
      </div>
      <!-- /.error-page -->

    </section>
<br><br>
    <!-- /.content -->
    <?php require 'footer.php' ;?>
    </body>
    </html>