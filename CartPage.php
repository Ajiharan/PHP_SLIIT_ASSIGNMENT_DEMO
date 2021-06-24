<!doctype html>
<html>
<head>
	
  <link rel="stylesheet" type="text/css" href="index.css.css">
  <link rel="icon" href="image/logo/download.png" type="image/gif" sizes="16x16">

<meta charset="utf-8">
<title>iPad</title>
</head>
<body>
	
	
<?php 
     include('./header/Header.php')
    ?>

	
	<div class="topnav" id="myTopnav">
	 <div class="dropdown">
    <button class="dropbtn">Apple Products
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="iphone.php">iPhone</a>
      <a href="ipad.php">iPad</a>
      <a href="mac.php">Mac </a>
		<a href="iwatch.php">iWatch</a>
    </div>
  </div>
  <a href="About Us.php">About Us</a>
  <a href="Contact Us.php">Contact Us</a>
  <div class="dropdown">
    <button class="dropbtn">More
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="FAQ.php">FAQ</a>
      <a href="Terms and Conditions.php">Terms & Conditions</a>
      <a href="Privacy Policy.php">Privacy Policy</a>
    </div>
  </div>
  
	<input type="text" placeholder="Search..">

</div>
   
<div class='center'>
    <div id='table-data' >

    </div>
</div>
       

<div class="footer">
  <div class="col">
    <h2>Shop By Product</h2>
    <ul>
      <li><a href="iphone.php">iPhone</a></li>
      <li><a href="ipad.php">iPad</a></li>
      <li><a href="mac.php">Mac</a></li>
      <li><a href="iwatch.php">iWatch</a></li>
    </ul>
  </div>
  <div class="col">
    <h2>More</h2>
    <ul>
      <li><a href="About Us.php">About Us</a></li>
     	<li><a href="Contact Us.php">Contact Us</a></li>
		<li><a href="FAQ.php">FAQ</a></li>
		<li><a href="Terms and Conditions.php">Terms & Conditions</a></li>
		<li><a href="Privacy Policy.php"> Privacy Policy</a></li>
    </ul>
  </div>
  <div class="col">
    <h2>Branches</h2>
    <ul>
      <li>Jaffna</li>
      <li>Colombo</li>
      <li>Kilinochchi</li>
      <li>Vavuniya</li>
      <li>Trincomalee</li>
    </ul>
  </div>
	<div class="clearfix"></div>
</div>
<script>
     function getData(){
             console.log('called')
            $.ajax({
                url:"./server/getCartDetails.php",
                type:"GET",
                dataType: "html",  
                success:function(d){		         		  
                    $('#table-data').html(d);
                }
            });
         }
	 $(document).ready(function(){

        
         getData();
      
     });

     function removeItem(id){
        $.ajax({
                url:"./server/Deleteitem.php",
                type:"POST",
                data:{id:id},            
                success:function(d){
                    getCount();
                    getData();
                    swal("Poof! Your data has been deleted!", {icon: "success",});                       
                }
            });
     }
     </script>
<!-- END OF FOOTER -->
	
</body>
</html>
