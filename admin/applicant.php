<?php 
    include 'session.php';


    global $connection;
    $db = mysql_select_db("fpz-app", $connection);
    error_reporting(0);

    $sql = "SELECT * FROM applicant";
    $records = mysql_query($sql);

    $software_questions = file_get_contents("../partials/software-engineer-questions.json");
    $json = json_decode($software_questions,true);


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fpz Applicant</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">FourPointZero</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $login_session; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="nav-headline">
                        <a href="javascript:void(0)">Applicant Name:<?php echo $applicant; ?></a>
                    </li>
                    <?php 
                         while ($applicant = mysql_fetch_assoc($records)) {
                            echo "<li>";
                            echo "<a a href='applicant.php?id=$applicant[ID]&name=$applicant[First_Name]&last=$applicant[Last_Name]'><h5>".$applicant['First_Name']." ".$applicant['Last_Name']."</h5></a>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Applicant Name: <?php echo  $_GET["name"] . " " . $_GET["last"]; ?>
                        </h1>
                    </div>
                    <div class="col-lg-12">
            
                            <h3>
                                Status: For stage 2
                             </h3>
                             <ul class="sample-buttons">
                                 <li><button type="button" class="btn btn-primary">Show info</button></li>
                                 <li><button type="button" class="btn btn-warning">Send mail</button></li>
                                 <li><button type="button" class="btn btn-danger">Fail</button></li>
                             </ul>
                  
                        <hr/>
                    </div>
                </div>
                <!-- /.row -->
     <?php
        $id = $_GET['id'];
       $sql_2 = "SELECT * FROM `applicant-ans` JOIN `applicant` ON `ID` = '$id' WHERE `Ans_id` = `ID` ORDER BY `Ans_id`";
       $records_2 = mysql_query($sql_2);
       $applicants_2 = mysql_fetch_assoc($records_2);
        $output = "<div class='container'>";
        foreach ($json['questions'] as $questions) {
            $output .= "<div class='row'>";
            $output .= "<h4>".$questions['question']."</h4>";
            $output .= "<div class='list-group'>";
            $output .= "<p class='list-group-item-text'>".$applicants_2[$questions['applicant_answers']]."</p>";
            $output .= "</div>";
            $output .= "</div>";
        }
        $output .= "</div>";
        echo $output;
     ?>
    </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        
         refreshInterval = 500
         refreshTimeout = setTimeout( getNotificationCounts, refreshInterval );
        function getNotifications() {
        $.ajax({
            url : 'applicant.php',
            type : 'POST',
                    data:   //put for exampel user_id but it cvan be handled by sesion as well
            dataType : 'json',
            success : function(data) {
                alert('You have'+ data.total +' new messages')
                refreshTimeout = setTimeout( getNotificationCounts, refreshInterval ); //this will check every half of second
            }
        });
    }
    </script>
</body>

</html>
