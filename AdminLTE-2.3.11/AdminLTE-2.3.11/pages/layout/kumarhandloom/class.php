<?php
class database{
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
public function getdata()
{
    $con=database::connect();
    $res=$con->query("select p.* ,c.* from product_tbl p,category_tbl c where p.fk_cat_id=c.cat_id");
    return $res;
    database::disconnect();

}
public function getcategory()
{
    $con=database::connect();
    $res=$con->query("select * from category_tbl ");
    return $res;
    database::disconnect();
}
public function getproduct($_id)
{
    $con=database::connect();
    $res=$con->query("select * from product_tbl where product_id=$_id");
    return $res;
    database::disconnect();
}
public function getcart()
{
    $con=database::connect();
    $res=$con->query("select * from cart_tbl ");
    return $res;
    database::disconnect();
}
public function categoryinsert($_cname)
{
    $con=database::connect();
    $res=$con->query("insert into category_tbl values('". null ."','". $_cname ."' )");
    return $res;
    database::disconnect();

}
public function categorydelete($_id)
{
    $con=database::connect();
    $res=$con->query("delete from category_tbl where cat_id in($_id)");
    return $res;
    database::disconnect();

}
public function cartdelete($_id)
{
    $con=database::connect();
    $res=$con->query("delete from cart_tbl where cart_id in($_id)");
    return $res;
    database::disconnect();

}
public function billdelete1($_id)
{
    $con=database::connect();
    $res=$con->query("delete from bill_tbl where bill_no in($_id)");
    return $res;
    database::disconnect();

}

public function categoryupdate($_id)
{
    $con=database::connect();
    $res=$con->query("select * from category_tbl where cat_id=" .$_id);
    return $res;
    database::disconnect();

}
public function categoryupdate1($_id,$_cname)
{
    $con=database::connect();
    $res=$con->query("update category_tbl set cat_name='". $_cname ."' where cat_id=" .$_id);
    return $res;
    database::disconnect();

}
public function getbill()
{
    $con=database::connect();
    $res=$con->query("select * from bill_tbl ");
    return $res;
    database::disconnect();
}
public function getuser()
{
    $con=database::connect();
    $res=$con->query("select * from user_tbl ");
    return $res;
    database::disconnect();
}
public function userinsert($_email, $_name , $_password , $_mobile , $_address , $_gender , $_image,$_verify,$_user_type )
{
    $con=database::connect();
    $res=$con->query("insert into user_tbl values('".$_email."','". $_name."' ,'". $_password ."' ,'". $_address."','". $_mobile."' ,'". $_gender."' ,'". $_image."','". null ."','". 1 ."','". $_user_type."'  )");
    return $res;
    database::disconnect();

}
public function productdelete($id)
{
    $con=database::connect();
    $sql="select * from product_tbl where product_id in($id)";
$res=$con->query($sql);
$row=$res->fetch_assoc();

$image="../../../../../".$row["image"];
echo $image;
if($image!="")
{
unlink($image);
}
$res=$con->query("delete  from product_tbl where product_id in($id)" );

return $res;
database::disconnect();
}
public function userdelete($_id)
{
    $con=database::connect();
    $arr=explode(",",$_id);
    $length=count($arr);
    for($i=0;$i<$length;$i++)
            {
$sql="select * from user_tbl where email ='".$arr[$i]."' ";
$res=$con->query($sql);
$row=$res->fetch_assoc();
$image="../../../../".$row["image"];

if($image!="../../../../")
{
unlink($image);
}

    $res=$con->query("delete from user_tbl where email ='".$arr[$i]."'"  );
}
return $res;
database::disconnect();
}
public function userupdate($email)
{
    $con=database::connect();
    $res=$con->query("select * from user_tbl where email='".$email."'");
    return $res;
    database::disconnect();
}
public function userupdate1($_email, $_name , $_password , $_mobile , $_address , $_gender , $_image,  $_user_type )
{
    $con=database::connect();
    $res=$con->query("update user_tbl set uname='". $_name ."',password='". $_password."',mobile_no='". $_mobile ."',address='". $_address ."',gender='". $_gender ."',image='". $_image ."',user_type='". $_user_type ."' where email=" . "'$_email'");
    return $res;
    database::disconnect();

}

}
?>