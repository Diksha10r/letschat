<!DOCTYPE html>
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
	#login_form{
		width:350px;
		height:350px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
	.ho:hover{
		animate__flash;
	}
</style>
</head>
<body style="background:linear-gradient(to bottom, #9966ff 0%, #cc33ff 100%);width: 100%;height:100%;background-attachment:fixed;">
<div class="" style="margin-top:6%; "><center><h1 class="animate__animated animate__zoomIn animate__slower ho" style="font-family: 'Luckiest Guy', cursive;font-size:50px; ">LET's CHAT!</h1></center> </div>
<div class="container" style="margin-top:1%; ">
	<div id="login_form" class="well" style="box-shadow: 5px 5px 5px rgba(242, 146, 184, 0.6)">
		<h2><center><span class="glyphicon glyphicon-lock"></span> LOGIN </center></h2>
		<hr>
		<form method="POST" action="login.php">
		Username: <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button> No account? <a href="signup.php"> Sign up</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>