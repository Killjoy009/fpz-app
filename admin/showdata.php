<?php 
	global $connection;
	error_reporting(0);

	$applicant = "SELECT `First_Name`, `Last_Name`, `Email`, `Contact_Number`, `Position`, `Date`  FROM `applicant`";
	$data = mysql_query($connection, $applicant);

	if (mysql_num_rows($data) > 0) {
		while ($row = mysql_fetch_assoc($data)) {
			echo $row['First_Name'];
		}
	}
?>