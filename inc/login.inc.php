<?php
session_start();
include '../dbh.php';

$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

if (empty($uid) || empty($pwd)) {
	header("Location: ../index.php?login=empty");
	exit();
} else{
	$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck < 1) {
		header("Location: ../index.php?login=error");
		exit();
	} else {
		if (!$row = mysqli_fetch_assoc($result)) {
			echo "Your username of password is incorrect!";
		} else{
			$_SESSION['id'] = $row['id'];
		}
	}
}