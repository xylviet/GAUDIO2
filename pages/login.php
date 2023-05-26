<?php
session_start();
if (isset($_SESSION['login'])) {
	header("Location: menu-admin.php");
} else {
	$username = $_POST['username'];
	$password = $_POST['password'];

	include_once("./config/connection.php");
	$result = mysqli_query($conn, "select * from admin where username = '$username' and password = md5('$password');");
	$data = $result->fetch_all(MYSQLI_ASSOC);
	if (count($data) > 0) {
		$_SESSION["login"] = "ok";
		header("Location: menu-admin.php");
	} else {
		header("Location: menu-login.php");
	}
}
