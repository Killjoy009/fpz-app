<?php 
    include 'notification.php';
    $connection = mysql_connect("localhost", "robert", "123") or die('asdad'); // Establishing Connection with Server
    $db = mysql_select_db("fpz-app", $connection);
    error_reporting(0);
    
    $test_info = "SELECT * FROM test";
    $test_records = mysql_query($test_info);

    $check = "SELECT COUNT(*) AS total FROM `test` WHERE";

    if ($_POST['test_button']) {
      $test_name = $_POST['test_name'];

      mysql_query("INSERT INTO `test` (`test_data`) VALUES ('$test_name')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> <!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
  <style>
    .has-notif span {
  position: absolute;
  top: 10px;
  left: 10em;
  height: 18px;
  width: 18px;
  line-height: 18px;
  background-color: #C14456;
  color: #ffffff;
  font-size: 1rem;
  font-weight: bold;
  text-align: center;
  border-radius: 50%;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  -webkit-transition: -webkit-transform 0.2s 0s;
  -moz-transition: -moz-transform 0.2s 0s;
  transition: transform 0.2s 0s;
}
  </style>
</head>
<body>
	
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="text" name="test_name"></input>
  <input type="submit" name="test_button"></input>
</form>
                        <div class="col-md-10 a">
                        <table id="sort" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="has-notif">
                                      Test Name
                                      <?php echo $notif; ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php
                                        while ($test = mysql_fetch_assoc($test_records)) {
                                            echo "<tr>";
                                            echo "<td>".$test['test_data']."</td>";
                                            echo "</tr>";
                                        }
                                   ?>
                            </tbody>
                        </table>     
                        </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.10.2/validator.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>