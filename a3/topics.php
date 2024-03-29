
<?php
$servername = "db.cs.dal.ca";
$username = "mmgandhi";
$password = "B00788134";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mmgandhi", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/topics.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
</head>
<body>

    <div class="topnav" id="myTopnav">
      <a href="index.html">Home</a>
      <a href="topics.html" class="active">Topics</a>
      <a href="groups.html">Groups</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
      <a href="javascript:void(0);" class="icon" onclick="navigationMenu()">
        <i class="fa fa-bars"></i>
      </a>
      <div class="topnav-right">
        <a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        <a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign up</a>
      </div>
    </div>
<!-- <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">PrepMe</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-lock"> Groups</span></a> </li>
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav> -->

<div class="container-fluid">
    <div class="jumbotron">
        <h1>PrepMe</h1>
        <p>Our website provides a learning platform to prepare yourselves for your upcoming interviews.
            You can join groups to interact with other members and view personalised contents.
            Quiz feature is also there to analyze your knowledge.</p>
    </div>
</div>

<div class="row match-to-row">
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <a href="topic.html"> <img src="Logos/javahome.png" alt="">
            <p>Java</p></a>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/pythonhome.png" alt="">
            <p>Python</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/androidhome.png" alt="">
            <p>Android</p>
        </div>
    </div>

    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/cloudhome.png" alt="">
            <p>Cloud</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/c-sharp-home.png" alt="">
            <p>C Sharp</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/clanguagehome.png" alt="">
            <p>C Language</p>
        </div>
    </div>
</div>

<div class="row match-to-row">
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/cpp-home.png" alt="">
            <p>C++</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/ajaxhome.png" alt="">
            <p>Ajax</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/hadoop.jpg" alt="">
            <p>Hadoop</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/php-logo.png" alt="">
            <p>PHP</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/springhome.png" alt="">
            <p>Spring</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/net-home.png" alt="">
            <p>.Net</p>
        </div>
    </div>
</div>
<div class="row match-to-row">
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/html-tutorial.png" alt="">
            <p>HTML5</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/css3.jpg" alt="">
            <p>CSS3</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/xml-home.png" alt="">
            <p>XML</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/nodejs-logo.png" alt="">
            <p>NodeJS</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/angularjs-logo.png" alt="">
            <p>AngularJS</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/bootstrap-logo.jpg" alt="">
            <p>Bootstrap</p>
        </div>
    </div>
</div>
<div class="row match-to-row">
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/sqlhome.png" alt="">
            <p>SQL</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/oracle_logo.png" alt="">
            <p>Oracle</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/mongodb.png" alt="">
            <p>MongoDB</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/cassandra-home.jpg" alt="">
            <p>Cassandra</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/sqlite-home.png" alt="">
            <p>SQLite</p>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="thumbnail">
            <img src="Logos/redis-home.png" alt="">
            <p>Redis</p>
        </div>
    </div>
</div>
<script src="js/app.js"></script>
</body>
</html>