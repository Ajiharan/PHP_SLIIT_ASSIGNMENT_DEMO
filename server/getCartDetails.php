<?php
    session_start();
    include('DBConnection.php');

?>

<?php 
   
    $result="<table class='tble-cart'>
    <thead>
        <tr>    
          
            <th scope='col'></th>
            <th scope='col'></th>
            <th scope='col'></th>   
            <th scope='col'></th>
        </tr>
    </thead> 
    <tbody>";
 try{
     $tot=0;
    $uid=$_SESSION['uid'];   
    $sql="select * from cart where uid=?";
    $res=$con->prepare($sql);
    $res->execute([$uid]);
    $tot=$res->rowCount();
    if($tot > 0){
        $cart=$res->fetchAll();
       foreach( $cart as $row){
        $tot =$tot+floatval($row->price)*$row->count;
        $result.= "<tr>
          
            <td><img src='".$row->url."' class='tble-img'/></td>
            <td>".$row->name."(".$row->count.")</td>
            <td>$".$row->price."</td>
            ";
            
            $result.="<td><button class='btn btn-danger' onclick='removeItem($row->cid)' >Remove</button></td>
            <tr/>";   
       }
      $result.="
       </tbody></table>";
       echo "<h4> Total Price : ".$tot."</h4>".$result;
    }else{
       echo "<h4 class='text-danger'>Records are not available</h4>";
    }

    
}catch(PDOException $e){
    echo "Error".$e->getMessage();
}

?>