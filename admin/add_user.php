<?php
	include('session.php');
	if(isset($_POST['adduser'])){
		$name=$_POST['name'];
		$username=$_POST['username'];
		$password=($_POST['password']);
		$access=$_POST['access'];
		
		mysqli_query($conn,"insert into `user` ( username, password, uname, access) values ('$username', '$password','$name',  '$access')");
	}

?>