<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>
<body>
<table style="background-color: white" width="100%" height="57">
      <tbody>
        <tr>
          <td width="1000px" style="text-align: left">
            <a href="home.php"><img src="image/logo/applelogo.png" /></a>
          </td>
          <td
            width="125"
            style="
              text-align: center;
              font-style: normal;
              font-size: 18px;
              color: black;
            "
          >
            <a href="index.php">MY ACCOUNT</a>
          </td>
          <td
            width="75"
            style="
              text-align: center;
              font-style: normal;
              font-size: 18px;
              color: black;
            "
          >

          <?php if(isset($_SESSION['uid'])){?>
            <a  href="../WAD/server/logout.php" >Logout</a><?php }?>
          </td>
          <td width="75">
            <a href="index.php"
              ><img src="image/logo/cart.png" width="50%"
            /></a>
          </td>
        </tr>
      </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

 <script src="js/jquery.js"></script>


 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>