
<?php

session_start();
if(isset($_SESSION['uid'])){
	header("Location:./home.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login & Resgister Form</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="./style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
	<link rel="icon" href="image/logo/download.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>

 <div class="login-page">
 	<div class="box">
 		<div class="left">
 			<h3>Create Account</h3>
 			<button type="button" class="register-btn">Register</button>
 		</div>
 		<div class="right">
 			<h3>Have an Account ?</h3>
 			<button type="button" class="login-btn">Login</button>
 		</div>
 		<div class="form">
 			 <!-- Login form Start -->
 			 <form  class="login-form" id='frm2'>
 			 	<h3>Log In</h3>
				  <h6 class="text-center text-danger" id="log_error1"></h6>
 			 	<div class="form-group">
 			 		<input required type="email" placeholder="Email Address*" class="form-control" id='email' name='email'>
 			 	</div>
 			 	<div class="form-group">
 			 		<input required type="password" placeholder="Password*" id='pwd' name='pwd' class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<label>
 			 			<input type="checkbox"> Remember Me
 			 		</label>
 			 	</div>
 			 	<button type="submit" class="submit-btn">Login</button>
 			 	<p><a href="#" class="register-btn">Register</a> | <a href="#" class="lost-pass-btn">Lost Your Password ?</a></p>
 			 </form>
 			 <!-- Login form End -->

             <!-- Register form Start -->
 			 <form class="register-form form-hidden" id='frm'>
 			 	<h3>Register</h3>
				  <h6 class="text-center text-danger" id="log_error"></h6>
 			 	<div class="form-group">
 			 		<input type="text" placeholder="First Name*" name='fname' id='fname' class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="text" placeholder="Last Name*" name='lname' id='lname' class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="email" placeholder="Email Address*" name='email_id' id='email_id' class="form-control">
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="password" placeholder="Password*" name='password' id='password' class="form-control">
 			 	</div>
 			 	
 			 	<button type="submit" class="submit-btn">Register</button>
 			 	<p><a href="#" class="login-btn">Login</a> | <a href="#" class="lost-pass-btn">Lost Your Password ?</a></p>
 			 </form>
 			 <!-- Register form End -->

 			 <!-- Lost Password form Start -->
 			 <div class="lost-password-form form-hidden">
 			 	<h3>Lost Your Password ?</h3>
 			 	<h5>You will receive a link to create a new password via email.</h5>
 			 	
 			 	<div class="form-group">
 			 		<input type="text" placeholder="Email Address*" class="form-control">
 			 	</div>
 			 	
 			 	
 			 	<button type="button" class="submit-btn">Reset Password</button>
 			 	<p><a href="#" class="login-btn">Login</a> | <a href="#" class="register-btn">Register</a></p>
 			 </div>
 			 <!-- Lost Password form End -->

 		</div>
 	</div>
 </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 <script src="script.js"></script>
 <script src="js/jquery.js"></script>
 <script src="js/jquery.validate.js"></script>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>



<script>
	 $(document).ready(function(){

		$("#frm2").submit(function (e){
			e.preventDefault();
			
		  $.ajax({
			   url:"./server/Login.php",
			   type:"post",
			   data:$("#frm2").serialize(),
			   success:function(d){
				 document.querySelector("#frm2").reset();
				 if(d==200){
				   $("#log_error1").text("");     
					//window.location.replace("./index.php");
					alert('successfully Login');
				 }else{
				 $("#log_error1").text("Invalid login");
				   document.querySelector("#frm").reset();
				 }
				
			   }
			 });	 
		})

     
	 $.validator.setDefaults({
			 submitHandler: function() {					
						$.ajax({
							url:"./server/Register.php",
							type:"post",
							data:$("#frm").serialize(),
							success:function(d){
							document.querySelector("#frm").reset();
								if(d==200){
									$("#log_error").text("");     
							//window.location.replace("./index.php");
									alert('successfully registered');
								}else{
									$("#log_error").text(d);
									document.querySelector("#frm").reset();
								}
					
							}	
						 });						
		   
		   }
	 });

	 $("#frm").validate({
	   rules:{ 
		 email_id:{
		   required:true,
		   email:true
		 },
		 password:{
		   required:true
		 },fname:{
			required:true, 
		 },lname:{
			 required:true
		 }		
	   },
	   messages:{
		email_id:{
		   required:"Please Enter your email address",
		   email_id:"Please Enter valid email address"
		 },
		 password:{
		   required:"Password is Required"
		 },fname:{
			 required:'First Name is required'
		 },lname:{
			 required:'Last Name is required'
		 }
	   }
	 });
   });
</script>

</body>
</html>