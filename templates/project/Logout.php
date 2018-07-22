<?php
session_start();
$acc = $_SESSION['account'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Timetable</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <!--
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                -->
                <li>
                    <a href='Timetable.php'>My School Timetable</a>
                </li>
                <li>
                    <a href='MemberCenter.php'>Member Center</a>
                </li>
                <li>
                    <a href='Friends.html'>Friends</a>
                </li>
                <li>
                    <a href='Logout.php'>Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div style="float:right;">
                    <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle" align="left">Toggle Menu</a>
                </div>
                <h1>Logout</h1>
                <p>Logout Your Account</p>  
                <form action="revise.php" method="post" class="Logout-form">
                    <button type="submit" class="btn btn-info" id="Logout">Logout!</button>
                </form>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });


    </script>

</body>

</html>
