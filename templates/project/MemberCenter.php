<?php
session_start();
$account = $_SESSION['account'];
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
                <li>
                    <a href='Timetable.php'>My School Timetable</a>
                </li>
                <li>
                    <a href="MemberCenter.php">Member Center</a>
                </li>
                <li>
                    <a href='Friends.html'>Friends</a>
                </li>
                <li>
                    <a href='Logout.php'>Logout</a>
                </li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div style="float:right;">
                    <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle" align="left">Toggle Menu</a>
                </div>
                <h1>Member Center</h1>
                <p>Revise Your Member Information</p>  

                <form role="form" action="revise.php" method="post" class="revise-form">
                    
                    <div class="form-group">
                      <label for="Revise-Password">Password</label>
                      <input type="password" style="width:700px" name="Revise-Password" class="form-control" placeholder="Password..." id="Revise-Password">
                    </div>

                    <div class="form-group">
                        <label for="Revise-Name">Name</label>
                        <input type="text" style="width:700px" name="Revise-Name" class="form-control" placeholder="Your Name..." id="Revise-Name">
                    </div>

                    <div class="form-group">
                        <label for="Revise-Department">Department</label>
                        <input type="text" style="width:700px" name="Revise-Department" class="form-control" placeholder="Your Department..." id="Revise-Department">
                    </div>
                    <button type="submit" class="btn btn-primary" id="save">Save</button>
                    
                </form>  

            </div>
        </div>

    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        //  get $_SESSION['account']
        var userAccount = '<?php echo $account; ?>';
    </script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    
    //get user data
    getUserData();
    function getUserData(){
        $.ajax({ 
            url: "http://140.118.9.206:5000/users/"+userAccount, 
            type:"GET",
            success: function(data){
                //console.log(data);
                $('#Revise-Password').append($('#Revise-Password').val(data.Users.password)); 
                $('#Revise-Name').append($('#Revise-Name').val(data.Users.name)); 
                $('#Revise-Department').append($('#Revise-Department').val(data.Users.department)); 
            }             
        });
    }
    </script>

</body>
</html>
