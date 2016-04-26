<?php 
	
	$connection = mysql_connect("localhost", "robert", "123");
	$db = mysql_select_db("fpz-app", $connection);

	if ($_POST['apply']) {
		$url = $_SERVER['REQUEST_URI'];
		$parts = explode('/',$url);

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$title = $parts[3];
		$date = date("Y/m/d");
		$ans1 = $_POST['ans_1'];
		$ans2 = $_POST['ans_2'];
		$ans3 = $_POST['ans_3'];
		$ans4 = $_POST['ans_4'];
		$ans5 = $_POST['ans_5'];
		$ans6 = $_POST['ans6'];
		$ans7 = $_POST['ans_7'];
		$ans8 = $_POST['ans_8'];
		$ans9 = $_POST['ans_9'];
		$ans10 = $_POST['ans_10'];
		$ans11 = $_POST['ans_11'];
		$ans12 = $_POST['ans_12'];
		$ans13 = $_POST['ans_13'];
		$ans14 = $_POST['ans_14'];
		$ans15 = $_POST['ans_15'];
		$ans16 = $_POST['ans_16'];
		$ans17 = $_POST['ans_17'];
		$ans18 = $_POST['ans_18'];
		$ans19 = $_POST['ans_19'];
		$ans20 = $_POST['ans_20'];
		$ans21 = $_POST['ans_21'];
		$ans22 = $_POST['ans_22'];
		$ans23 = $_POST['ans_23'];
		$ans24 = $_POST['ans_24'];
		$ans25 = $_POST['ans_25'];
		$ans26 = $_POST['ans_26'];
		$ans27 = $_POST['ans_27'];
		$ans28 = $_POST['ans_28'];
		$ans29 = $_POST['ans_29'];
		$ans30 = $_POST['ans_30'];
		$ans31 = $_POST['ans_31'];
		$ans32 = $_POST['ans_32'];
		$ans33 = $_POST['ans_33'];
		$ans34 = $_POST['ans_34'];
		$ans35 = $_POST['ans_35'];
		$ans36 = $_POST['ans_36'];
		$ans37 = $_POST['ans_37'];

		mysql_query("INSERT INTO `applicant` (`First_Name`, `Last_Name`, `Email`, `Contact_Number`, `Position`, `Date`) VALUES ('$firstname', '$lastname', '$email', '$contact', '$title', '$date')");
		mysql_query("INSERT INTO `applicant-ans` (`Ans-1`, `Ans-2`, `Ans-3`, `Ans-4`, `Ans-5`, `Ans-6`, `Ans-7`, `Ans-8`, `Ans-9`, `Ans-10`, `Ans-11`, `Ans-12`, `Ans-13`, `Ans-14`, `Ans-15`, `Ans-16`, `Ans-17`, `Ans-18`, `Ans-19`, `Ans-20`, `Ans-21`, `Ans-22`, `Ans-23`, `Ans-24`, `Ans-25`, `Ans-26`, `Ans-27`, `Ans-28`, `Ans-29`, `Ans-30`, `Ans-31`, `Ans-32`, `Ans-33`, `Ans-34`, `Ans-35`, `Ans-36`, `Ans-37`)  VALUES ('$ans1', '$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9','$ans10','$ans11','$ans12','$ans13','$ans14','$ans15','$ans16','$ans17','$ans18','$ans19','$ans20','$ans21','$ans22','$ans23','$ans24','$ans25','$ans26','$ans27','$ans28','$ans29','$ans30','$ans31','$ans32','$ans33','$ans34','$ans35','$ans36','$ans37')");
     }
	mysql_close($connection); // 
?>