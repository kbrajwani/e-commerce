<?php
class classproduct{
private static $con=null;
private static function connect()
{
    self::$con=mysqli_connect('localhost','root','','mattress');
    return self::$con;

}
private static function disconnect()
{
    mysqli_close(self::$con);
     self::$con=null;
    
}
public function getcategory($_id)
{
    $con=classproduct::connect();
    
    $res=$con->query("select p.*,c.* from product_tbl p,category_tbl c where p.fk_cat_id=c.cat_id and c.cat_name="  . "'$_id'" );
    return $res;
    
    classproduct::disconnect();
}
public function getallcategory()
{
    $con=classproduct::connect();
    
    $res=$con->query("select * from category_tbl " );
    return $res;
    
    classproduct::disconnect();
}
public function checkoutdelete($id)
{
    $con=classproduct::connect();
    
    $res=$con->query("delete from cart_tbl  where fk_product_id='".$id."' " );
    return $res;
    
    classproduct::disconnect();
}
public function checkoutdelete1($email)
{
    $con=classproduct::connect();
    
    $res=$con->query("delete from cart_tbl  where fk_email_id='".$email."' " );
    return $res;
    
    classproduct::disconnect();
}
public function getcheckout($email)
{
    $con=classproduct::connect();
    
    $res=$con->query("select * from cart_tbl  where fk_email_id='".$email."' " );
    return $res;
    
    classproduct::disconnect();
}
public function userview($_email1)
{
    $con=classproduct::connect();
    $res=$con->query("select * from user_tbl where email=" . "'$_email1'");
    return $res;
    classproduct::disconnect();

}
public function getbill($email)
{
    $con=classproduct::connect();
    
    $res=$con->query("select * from bill_tbl  where fk_email_id='".$email."' " );
    return $res;
    
    classproduct::disconnect();
}
public function getbill1($email)
{
    $con=classproduct::connect();
    
    $res=$con->query("select * from bill_tbl  where fk_email_id='".$email."' ORDER BY bill_no DESC" );
    return $res;
    
    classproduct::disconnect();
}
public function getallproduct()
{
    $con=classproduct::connect();
    $res=$con->query("select * from product_tbl ");
    return $res;
    classproduct::disconnect();

}
public function getproduct($_id)
{
    $con=classproduct::connect();
    $res=$con->query("select * from product_tbl where product_id=" . $_id);
    
    return $res;
    classproduct::disconnect();

}
public function insertcart($_id,$_email)
{
    $con=classproduct::connect();
    $_sql="insert into cart_tbl values('". null ."','". $_email ."','". $_id ."','". 1 ."')";
    $res=$con->query($_sql);
    return $res;
    loginclass::disconnect();
}
public function insertbill($email,$product,$total,$date,$address,$payment)
{
    $con=classproduct::connect();
    $_sql="insert into bill_tbl values('". null ."','". $email ."','". $product ."','". $total ."','". $date ."','". $address ."','". $payment ."')";
    $res=$con->query($_sql);
    return $res;
    loginclass::disconnect();

}


}
?>