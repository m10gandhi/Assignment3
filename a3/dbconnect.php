<?php
$servername = "db.cs.dal.ca";
$username = "mmgandhi";
$password = "B00788134";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mmgandhi", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "success";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>