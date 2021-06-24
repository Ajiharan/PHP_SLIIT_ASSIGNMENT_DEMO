<?php
  session_start();
include('DBConnection.php');
?>

<?php

try{
  
    $imageUrl=$_POST['imageUrl'];
    $name=$_POST['name'];  
    $price=floatval($_POST['price']);
    $uid=$_SESSION['uid']; 
  
    $sql="insert into cart(uid,url,name,price) values(?,?,?,?)";
    $res=$con->prepare($sql);
    $res->execute([$uid,$imageUrl,$name,$price]);      
     
    echo 200;

    
}catch(Exception $e){
    echo "Error".$e->getMessage();
}
?>

