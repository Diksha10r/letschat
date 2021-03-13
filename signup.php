<?php
	include('conn.php');
	session_start();
?>
<!doctype html>
<html>
<head>
	<title>LetsChat</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#signup_form{
		width:350px;
		height:430px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
	.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: white;

body { 
  background:linear-gradient(to bottom, #9966ff 0%, #cc33ff 100%) no-repeat;
  width: 100%;
  height:100%;
background-attachment:fixed;
}

.but{
 color: #ff4dff;
}
  

</style>
</head>
<body style="background:linear-gradient(to bottom, #9966ff 0%, #cc33ff 100%);width: 100%;height:100%;background-attachment:fixed;">
<?php


?>
<div class="" style="margin-top:6%; "><center><h1 class="animate__animated animate__zoomIn animate__slower ho" style="font-family: 'Luckiest Guy', cursive; font-size:40px; ">LET's CHAT!</h1></center> </div>
<div class="container" style="margin-top:0%; ">
	<div id="signup_form" class="well" style="box-shadow: 5px 5px 5px rgba(242, 146, 184, 0.6)" >
		<h2><center><span class="glyphicon glyphicon-user"></span> Sign Up</center></h2>
		<hr>
		<form method="POST" action="register.php">
		Name: <input type="text" name="name" class="form-control" required>
		<div style="height: 10px;"></div>
		Username: <input type="text" name="username" class="form-control"  title= "no space or special charaters please" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"  required> 
		<div style="height: 10px;"></div>
		<input type="submit" name="submit" value="Register" class="btn btn-primary"><a href="index.php"> Back to Login</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
		
	</div>
</div>
<?php
    
?>
</body>
</html>