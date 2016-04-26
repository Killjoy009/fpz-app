<?php 
    include 'session.php';
    
    $connection = mysql_connect("localhost", "robert", "123") or die('asdad'); // Establishing Connection with Server
    $db = mysql_select_db("fpz-app", $connection);
    error_reporting(0);

    $applicant_info = "SELECT * FROM applicant ORDER BY `Date` DESC";
    $records = mysql_query($applicant_info);

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fpz Admin</title>

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
                <a class="navbar-brand" href="http://localhost/fpz-app/admin/">FourPointZero</a>
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

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="nav-headline">
                        <a href="#0">Applications</a>
                    </li>
                    <li>
                        <a href="#0">Management Trainee</a>
                    </li>
                    <li>
                        <a href="#0">Marketing Executive</a>
                    </li>
                    <li>
                        <a href="#0">Marketing Intern</a>
                    </li>
                    <li>
                        <a href="#0">Product Manager</a>
                    </li>
                    <li>
                        <a href="#0">Research Analyst</a>
                    </li>
                    <li class="active has-notif">
                        <a href="#0">Software Engineer (Web/Mobile)</a>
                    </li>
                    <li>
                        <a href="#0">Software Engineer Intern</a>
                    </li>
                    <li>
                        <a href="#0">UI/UX Designer</a>
                    </li>
                    <li>
                        <a href="#0">UI/UX Designer Intern</a>
                    </li>
                    <li>
                        <a href="#0">Positions</a>
                    </li>
                    <li>
                        <a href="#0">Users</a>
                    </li>
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
                            Software Engineer (Web/Mobile)
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        <h2>
                            1 Pending Application(s)/102 Pending Answer(s)
                        </h2>
                    </div>
                </div>
                <!-- /.row -->

                <div class="container">
            <div class="row">
            <div>
                <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#new" aria-controls="home" role="tab" data-toggle="tab">New Applicants</a></li>
                    <li role="presentation"><a href="#stage2" aria-controls="profile" role="tab" data-toggle="tab">Stage 2 (Qualified</a></li>
                    <li role="presentation"><a href="#stage2review" aria-controls="messages" role="tab" data-toggle="tab">Stage 2 (Review)</a></li>
                    <li role="presentation"><a href="#stage3" aria-controls="settings" role="tab" data-toggle="tab">Stage 3 (Qualified)</a></li>
                    <li role="presentation"><a href="#stage3review" aria-controls="home" role="tab" data-toggle="tab">Stage 3 (Review)</a></li>
                    <li role="presentation"><a href="#interview" aria-controls="profile" role="tab" data-toggle="tab">For Interview</a></li>
                    <li role="presentation"><a href="#unsucessful" aria-controls="messages" role="tab" data-toggle="tab">Unsucessful</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="new">
                        <div class="col-md-10 a">
                        <table id="sort" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact Number</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Acion</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php
                                        while ($applicant = mysql_fetch_assoc($records)) {
                                            echo "<tr>";
                                            echo "<td><a href='applicant.php?id=$applicant[ID]&name=$applicant[First_Name]&last=$applicant[Last_Name]' target='_blank'>".$applicant['First_Name']." ".$applicant['Last_Name']."</a></td>";
                                            echo "<td>".$applicant['Email']."</td>";
                                            echo "<td>".$applicant['Contact_Number']."</td>";
                                            echo "<td>".$applicant['Position']."</td>";
                                            echo "<td>For Stage 2</td>";
                                            echo "<td>".$applicant['Date']."</td>";
                                            echo "<td>
                                                    <button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></button>
                                                    <button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></button>
                                                   </td>";
                                            echo "</tr>";
                                        }
                                   ?>
                            </tbody>
                        </table>     
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="stage2">...</div>
                    <div role="tabpanel" class="tab-pane" id="stage2reiew">...</div>
                    <div role="tabpanel" class="tab-pane" id="stage3">...</div>
                    <div role="tabpanel" class="tab-pane" id="stage3review">...</div>
                    <div role="tabpanel" class="tab-pane" id="interview">...</div>
                    <div role="tabpanel" class="tab-pane" id="unsucessful">...</div>
                    <div role="tabpanel" class="tab-pane" id="settings">...</div>
                  </div>
            </div>
        </div>
    </div>
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
        $(document).ready(function() {
            $('#sort').DataTable( {
                "order": [[ 5, "desc" ]]
            } );
        } );
    </script>

</body>

</html>
