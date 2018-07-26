<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
   <div id="wrapper">
  <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="nav-sidebar">
                <li class="sidebar-inner">
                    <a href="index.php">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="dashadmin.php" >Dashboard</a>
                </li>
                <li>
                    <a href="dashtopics.php">Topics</a>
                </li>
                <li>
                    <a href="dashquiz.php">Quiz</a>
                </li>
                <li>
                    <a href="dashusers.php">Users</a>
                </li>
                <li>
                    <a href="dashsettings.php" class="active">Settings</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                         <h1>Welcom,</h1>
    <h2><?php
    session_start();
if (!(isset($_SESSION['fname']) == "Admin")) {

header ("Location: dashboard.php");

}

elseif (!(isset($_SESSION['fname']) && $_SESSION['fname'] != '')) {

header ("Location: login.html");

}
else{
    echo $_SESSION['fname'];
}
    ?></h2>
                        <a href="#menu-toggle" class="btn btn-default" id="men-toggle">Toggle Menu</a>
                    </div>
                 <script>
    $("#men-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    </body>
</html>