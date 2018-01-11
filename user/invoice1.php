<!DOCTYPE html>
<html>

<body>
 <?php
 session_start();
if($_SESSION["email"]==null)
{
header('location:login.php');
}
else
{
  require 'classproduct.php';
$obj=new classproduct();
$email=$_SESSION["email"];
$result=$obj->getbill($email);
$obj->checkoutdelete1($email);
$row=$result->fetch_assoc();
if($result->num_rows==0)
{
  header('location:billempty.php');
}
require 'menulogout.php';
}

$obj=new classproduct();
$email=$_SESSION["email"];
$result=$obj->getbill1($email);
$row=$result->fetch_assoc();

echo '     <div class="col-xs-12 row no-print container">';
       echo ' <div class="col-xs-12 container btn btn-success">';
          
     echo '<center>    <b>Invoice:- '.$row["bill_no"].'</b>';
   echo '       </center>';
 echo '      </div>';
 echo '     </div>';

 echo '   <!-- Main content -->';
    echo '<section class="invoice  container">';
      echo '<!-- title row -->';
     echo ' <div class="row">';
    echo '    <div class="col-xs-12">';
        echo '  <h2 class="page-header">';
       echo '     <i class="fa fa-globe"></i>'. $email.' ';
       echo '     <small class="pull-right">Date:'. $row["date"].' </small>';
echo '          </h2>';
      echo '  </div>';
     echo '   <!-- /.col -->';
      echo '</div>';
    echo '  <!-- info row -->';
 echo '     <div class="row invoice-info">';
echo '        <div class="col-sm-4 invoice-col">';
      echo '    From';
          echo '<address>';
     echo '       <strong>mattress, Inc.</strong><br>';
      echo '      795 Folsom Ave, Suite 600<br>';
echo '            San Francisco, CA 94107<br>';
      echo '      Phone: (804) 123-5432<br>';
echo '            Email: info@almasaeedstudio.com';
      echo '    </address>';
      echo '  </div>';
 echo '       <!-- /.col -->';
       echo ' <div class="col-sm-4 invoice-col">';
 echo '         To';
       echo '   <address>';
            echo '<strong>'. $email.'</strong> <br>';
echo            $row["shipping_address"];
      echo '    </address>';
echo '        </div>';
    echo '    <!-- /.col -->';
        echo '<div class="col-sm-4 invoice-col">';
echo '          <b>Invoice:- '.$row["bill_no"].'</b><br>';
      echo '    <br>';
  echo '        <b>Order ID:</b> 4F3S8J<br>';
        echo '  <b>Payment Due:</b> ';
        $day=date("y-m-d");
          $date=new datetime($day);
          $date->modify('+10 day');
          echo $date->format('d-m-y');
        echo '<br>';
    echo '      <b>Account:</b> 968-34567';
   echo '     </div>';
   echo '     <!-- /.col -->';
 echo '     </div>';
echo '      <!-- /.row -->';
echo '      <!-- Table row -->';
echo '      <div class="row">';
echo '        <div class="col-xs-12 table-responsive">';
echo '          <table class="table table-striped">';
echo '            <thead>';
echo '            <tr>';
echo '              <th>Qty</th>';
echo '              <th>Product</th>';
      echo '        <th>Serial #</th>';
            echo '  <th>Description</th>';
echo '              <th>Subtotal</th>';
      echo '      </tr>';
            echo '</thead>';
echo '            <tbody>';
      
            
            $arr=explode(",",$row["fk_product_id"]);
         
          $length=count($arr);
            $total=0;
            for($i=0;$i<$length-1;$i++)
            {
              $res=$obj->getproduct($arr[$i]);
				$row1=$res->fetch_assoc();
            echo '<tr>';
             echo ' <td>1</td>';
              echo '<td>'.$row1["pname"].'</td>';
              echo '<td>'.$row1["product_id"].'</td>';
              echo '<td>'.$row1["detail"].'</td>';
              echo '<td>'.$row1["price"].'</td>';
              $total=$total+$row1["price"];
              
            echo '</tr>';
            }
            
            
 echo '           </tbody>';
       echo '   </table>';
   echo '     </div>';
        
  echo '    </div>';
      

     echo ' <div class="row">';
      
     echo '   <div class="col-xs-6">';
     echo '     <p class="lead">Payment Methods:</p>';
          
          if($row["payment_type"]=="visa")
          {
         echo ' <img src="../images/visa.png" alt="Visa">';
          }
          elseif($row["payment_type"]=="mastercard")
          {
          echo '<img src="../images/mastercard.png" alt="Mastercard">';
          }
          elseif($row["payment_type"]=="american express")
          {
          echo '<img src="../images/american-express.png" alt="American Express">';
          }
          else
          {
          echo '<img src="../images/paypal2.png" alt="Paypal">';
          }
          
   echo '       <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">';
     echo '       Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg';
    echo '        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.';
    echo '      </p>';
echo '        </div>';
        
 echo '       <div class="col-xs-6">';
 echo '         <p class="lead">Amount Due ';
          $day=date("y-m-d");
          $date=new datetime($day);
          $date->modify('+10 day');
          echo $date->format('d-m-y');
 echo '</p>';

echo '          <div class="table-responsive">';
echo '            <table class="table">';
echo '              <tr>';
echo '                <th style="width:50%">Subtotal:</th>';
echo '                <td>'. $total.' </td>';
echo '              </tr>';
              
echo '              <tr>';
echo '                <th>Shipping:</th>';
echo '                <td>100</td>';
echo '              </tr>';
echo '              <tr>';
echo '                <th>Total:</th>';
echo '                <td>';
                echo $row["amount"]; 
echo '             </td> </tr>';
 echo '           </table>';
echo '          </div>';
echo '        </div>';
        
echo '      </div>';
      

      
 
 echo '   </section>';
    
 echo '   <div class="clearfix"></div>';
echo '    <div><br></div>';
echo '  </div>';

  ?>
  <?php
  require 'footer.php';
  ?>
</body>
</html>
