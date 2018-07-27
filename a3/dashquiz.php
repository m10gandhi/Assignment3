<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <a href="dashadmin.php">Dashboard</a>
                </li>
                <li>
                    <a href="dashtopics.php">Topics</a>
                </li>
                <li>
                    <a href="#" class="active">Quiz</a>
                </li>
                <li>
                    <a href="dashusers.php">Users</a>
                </li>
                <li>
                    <a href="dashsettings.php">Settings</a>
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
                        <a href="#menu-toggle" class="btn btn-default" id="men-toggle">Toggle Menu</a>
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
                    </div>
                 <script>
    $("#men-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
                </div>
                <div class="container">
  <h2>Add Quiz questions</h2>
   <div class="table-responsive">
            <table class="table table-striped">
  <form action="/action_page.php" method="post">
    <div class="form-group">
    <label for="text">Question</label>
                      <input type="text" class="form-control" name="op1"  placeholder="Enter question">
                    </div>

                    <div class="form-group">
                      <label for="text">option-1</label>
                      <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1">
                    </div>
                    <div class="form-group">
                      <label for="text">option-2</label>
                      <input type="text" class="form-control" name="op2"  placeholder="Enter option-2">
                    </div>
                    
                    <div class="form-group">
                      <label for="text">option-3</label>
                      <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3">
                    </div>
                    
                    <div class="form-group">
                      <label for="text">option-4</label>
                      <input type="text" class="form-control"  name="op4" id="email" placeholder="Enter option-4">
                    </div>
                    <div class="form-group">
                      <label for="text">answer</label>
                      <input type="text" class="form-control" name="ans" id="email" placeholder="Enter answer">
                    </div>
                    <div class="form-group">
                           
                           <select class="form-control" id="sel1" name="cat">
                                <option value="" >choose category</option>
                                <option value="1">html</option>
                          </select>
                        </div>
                    <button type="submit" class="btn btn-default">Submit</button><br>
                  </form>
              </tbody>
            </table>

            </div>
        </div>
    </div>
</div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>