<?php
session_start();
require_once 'db_connection.php';

if(isset($_REQUEST['submit'])) {
	$email = mysqli_real_escape_string($db,$_REQUEST['email']);
	$password = mysqli_real_escape_string($db,$_REQUEST['password']);
	if($password != '' and $email != '') {
		$pass = md5($password);
		$query = "select * from users where email = '$email' and password = '$pass'";
		$row = mysqli_query($db,$query);
		if(mysqli_num_rows($row) > 0) {
			$_SESSION['login'] = "Login is successfull";
			$_SESSION['user_login'] = $email;
		} else {
			$_SESSION['login'] = "Credentials are incorrect";
			unset($_SESSION['user_login']);
		}
		header('location:pics.php');
	} else {
		$_SESSION['user_validation_error'] = "All fields are required";
		unset($_SESSION['user_login']);
		header('location:create-user.php');
	}
}

?>
