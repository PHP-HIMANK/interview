<?php
session_start();
require_once 'db_connection.php';
if(isset($_SESSION['user_login'])) {
	unset($_SESSION['user_login']);
	header('location:index.php');
}
?>
