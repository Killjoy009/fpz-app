<?php 
	include ('../eden.php');
	error_reporting(0);
	session_start();
	$error = "";

	if ($_POST['login']) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "<div class='error-message'>
				<p>Invalid username and password!</p>
			</div>";
		}
		else {
			$username = $_POST['username'];
			$password = $_POST['password'];
			//Establishing Connection with the server
			$database = eden('mysql', 'localhost' ,'fp-app', 'robert', '123');  
			//Security :)
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			//Select query to fetch
			$query = mysql_query("SELECT * FROM `fpz-admin` WHERE admin_pass='$password' AND admin_user='$username'", $database);
			$rows = mysql_num_rows($query);
			if ($rows != 1 ) {
				$_SESSION['login_user'] = $username;
				header("location: http://localhost/fpz-app/admin/");
			}
			else {
				$error = "<div class='error-message'>
							<p>Invalid username and password!</p>
						</div>";
			}
			mysql_close($database);
		}
	}
	if(isset($_SESSION['login_user'])){
		header("location: http://localhost/fpz-app/admin/");
	}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../css/style.css"> <!-- Gem style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> <!-- Bootstrap -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->  	
	<title>Log In</title>
</head>
	
<body>	
	<form class="cd-form floating-labels" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<fieldset>
			<legend>Please sign in</legend>

			<?php echo $error; ?>

			<div class="icon">
				<input class="user" type="text" name="username" id="cd-name" placeholder="Username">
		    </div> 

		    <div class="icon">
				<input class="company" type="text" name="password" placeholder="Password" id="cd-company">
		    </div> 
		</fieldset>

		<fieldset>
			<div>
		      	<input type="submit" value="Send Message" name="login">
		    </div>
		</fieldset>
	</form>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="js/jquery-2.1.1.js"></script> <!-- Gem jQuery -->
	<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>	