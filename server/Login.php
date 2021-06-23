<?php
  session_start();
  include('DBConnection.php');
?>

<?php

try{
  
    $email_id=$_POST['email'];   
    $password=$_POST['pwd']; 
  
    $sql="select * from user where email_id = ? and password=?";
    $res=$con->prepare($sql);
    $res->execute([$email_id,$password]);
    $tot=$res->rowCount();  
    
    if($tot > 0){
      $login_user=$res->fetch();           
      $_SESSION['uid']=$login_user->uid;
      $_SESSION['uname']=$login_user->firstName;
      echo 200;
            
    }else{
        echo 400;
    }
                 

}catch(Exception $e){
    echo "Error".$e->getMessage();
}
?>

