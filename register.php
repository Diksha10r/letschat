<?php
	include('conn.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=check_input($_POST['username']);
	
			$sql="select * from user where (username='$username');";

      $result=mysqli_query($conn,$sql);

      if (mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_assoc($result);
    
		if($username==isset($row['username']))
		{
				$_SESSION['msg'] = "Username already exists. Please try again!"; 
				header('location: signup.php');
		}
	}
		else{
			
			$fusername=$username;
			
			$password = check_input($_POST["password"]);
			$fpassword=$password;
			$fname = check_input($_POST["name"]);
			
			$query=mysqli_query($conn,"insert into user (username, password, uname) values ('$fusername', '$fpassword', '$fname')");
			if ($query)
			{
				$_SESSION['msg'] = "Sign up successful. You may login now!"; 
				header('location: index.php');
			}
			else{
				echo("something went wrong");
			}
		}
	  	

		
		
		
		
	}
?>