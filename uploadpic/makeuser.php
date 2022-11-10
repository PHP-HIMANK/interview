<?php
session_start();
require_once 'db_connection.php';

if(isset($_REQUEST['submit'])) {
	$name = mysqli_real_escape_string($db,$_REQUEST['name']);
	$email = mysqli_real_escape_string($db,$_REQUEST['email']);
	$password = mysqli_real_escape_string($db,$_REQUEST['password']);
	$confirm_password = mysqli_real_escape_string($db,$_REQUEST['confirm_password']);
	if($password != '' and $confirm_password != '' and $name != '' and $email != '') {
		if($password == $confirm_password) {
			$pass = md5($password);
			$query = "insert into users (`name`,`email`,`password`) values ('$name','$email','$pass')";
			mysqli_query($db,$query);
			$_SESSION['user_validation_error'] = "User added successfully";
			header('location:create-user.php');
		} else {
			$_SESSION['user_validation_error'] = "Password and confirm password must match";
			header('location:create-user.php');
		}
	} else {
		$_SESSION['user_validation_error'] = "All fields are required";
		header('location:create-user.php');
	}
}

?>
