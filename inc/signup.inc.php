<?php
session_start();
//Check if the user clicked the button
if (isset($_POST['submit'])){
	include '../dbh.php';

	$first = mysqli_real_escape_strin($conn, $_POST['first']);
	$last = mysqli_real_escape_strin($conn, $_POST['last']);
	$email = mysqli_real_escape_strin($conn,$_POST['email']);
	$uid = mysqli_real_escape_strin($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_strin($conn, $_POST['pwd']);

	$sql = "INSERT INTO user (first, last, email,  uid, pwd)
	VALUES ('$first', '$last', '$email', $uid', '$pwd')";

	$result = mysqli_query($conn, $sql);

		//Check if inputs are empty
			if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
				header("Location: ../index.php?signup=empty");
				exit();
			}
			else{
				//Check if input characters are valid
				if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
					header("Location: ../index.php?signup=invalid");
				exit();
				} else {
					//Check email if valid
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location: ../index.php?signup=email");
					exit();
					} else{
						$sql = "SELECT * FROM users WHERE uid='$uid' ";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if ($resultCheck > 0) {
							header("Location: ../index.php?signup=usertaken");
							exit();
						} else {
							// Hash the password

							$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

							//Insert the user into the database
							$sql = "INSERT INTO users (first, last, email, uid, pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
							mysqli_query($conn, $sql);
							header("Location: ../index.php?signup=success");
							exit();
						}
					}
				}
			}
		} 
		else{
			header("Location: ../index.php");
			exit();
		}


	






		

		