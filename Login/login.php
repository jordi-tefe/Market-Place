<?php
//deleted the session_start()
session_start();
//kedatabase endiwesd enaregalen, betachegnaw file (db_conn.php)
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data)
	{
		//andand whitespace menamn endikenes enaregalen
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['password']);

	//bado kehone
	if (empty($uname)) {
		header("Location: index.php?error=Email is required");
		exit();
	} else if (empty($pass)) {
		header("Location: index.php?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['email'] === $uname && $row['password'] === $pass) {
				$_SESSION['email'] = $row['email'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['firstname'] = $row['firstname']; //if it doesn't work ,, delete this later
				header("Location: home.php");

				exit();
			} else {
				header("Location: index.php?error=Incorect Email or password");
				exit();
			}
		} else {
			header("Location: index.php?error=Incorect Email or password");
			exit();
		}
	}
} else {
	header("Location: index.php");
	exit();
}
