<?php
	$error = '';
	
	if(isset($_POST['login_btn'])){
		if(empty($_POST['Email2']) || empty($_POST['Password2'])){
			$error = "Username or Password is Invalid";
		}else{
			$user = $_POST['Email2'];
			$password = $_POST['Password2'];
			$password = md5($password);
			//Connect to server
			$conn = mysqli_connect("localhost", "root", "");
			//Select Database
			$db = mysqli_select_db($conn, "registration");
			//Query table for users information
			$query = mysqli_query($conn, "SELECT * FROM users WHERE password = '$password' AND email = '$user'");
			
			$rows = mysqli_num_rows($query);
			if($rows == 1){
				//header redirect
			}else{
				//error
			}
			mysqli_close($conn); //Close connection
		}
	}
?>