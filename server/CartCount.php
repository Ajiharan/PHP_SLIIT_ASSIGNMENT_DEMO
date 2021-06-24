<?php
  session_start();
include('DBConnection.php');
?>

<?php

try{
  
    $uid=$_SESSION['uid'];   
    $sql="select count(*) as tot from cart where uid=?";
    $res=$con->prepare($sql);
    $res->execute([$uid]);
    $cart=$res->fetch();
    $_SESSION['count']=$cart->tot;
    echo $cart->tot;

    
}catch(Exception $e){
    echo "Error".$e->getMessage();
}
?>

