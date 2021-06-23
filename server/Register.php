<?php
  session_start();
include('DBConnection.php');
?>

<?php

try{
  
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];  
    $email_id=$_POST['email_id'];   
    $password=$_POST['password']; 
  
    $sql1="select * from user where email_id=?";
    $res1=$con->prepare($sql1);
    $res1->execute([$email_id]);
    $tot1=$res1->rowCount();  
    
    if($tot1 > 0){
        echo "sorry email already exists";
    }else{
        $sql="insert into user(firstName,lastName,email_id,password) values(?,?,?,?)";
        $res=$con->prepare($sql);
        $res->execute([$fname,$lname,$email_id,$password]);        
        echo 200;     
    }

}catch(Exception $e){
    echo "Error".$e->getMessage();
}
?>

