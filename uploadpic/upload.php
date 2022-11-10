<?php
require_once 'db_connection.php';
session_start();

if(isset($_REQUEST['submit'])) {
	$filename = $_FILES['imagefile']['name'];
	$filetmpname = $_FILES['imagefile']['tmp_name'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if($ext == 'png' OR $ext == 'jpg' OR $ext == 'jpeg') {
		$file_name = mt_rand().'-'.time().'.'.$ext;
		move_uploaded_file($filetmpname, 'images/'.$file_name);
		$email = $_SESSION['user_login'];
		mysqli_query($db,"insert into pics (`email`, `filename`) values ('$email', '$file_name')");
		header('location:index.php');
	} else {
		$_SESSION['validation_error'] = 'File must be image file';
		header('location:index.php');
	}
}

?>