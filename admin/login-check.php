<?php 
	error_reporting(0);
	session_start();
	$error = "";

	if ($_POST['login']) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "<div class='error-message'>
				<p>Please enter a valid email address</p>
			</div>";
		}
		else {
			$username = $_POST['username'];
			$password = $_POST['password'];
			//Establishing Connection with the server
			$connection = mysql_connect("localhost", "robert", "123");
			//Security :)
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			//Select query to fetch
			$query = mysql_query("SELECT * FROM `fpz-admin` WHERE `admin_pass`='$password' AND `admin_user`='$username'", $connection);
			$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user'] = $username;
				header("location: index.php");
			}
			else {
				$error = "<div class='error-message'>
							<p>Please enter a valid email address</p>
						</div>";
			}
			mysql_close($connection);
		}
	}
?>