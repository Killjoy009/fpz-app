
<?php
	$connection = mysql_connect("localhost", "robert", "123");
	$db = mysql_select_db("fpz-app", $connection);
	session_start();

	$user_check = $_SESSION['login_user'];
	$ses_sql = mysql_query("SELECT `admin_user` FROM `fpz-admin` WHERE `admin_user`='$user_check'", $connection);
	$row = mysql_fetch_assoc($ses_sql);
	$login_session = $row['admin_user']; 

	if (!isset($login_session)) {
		mysql_close($connection);
		header("location: login.php");
	}
?>