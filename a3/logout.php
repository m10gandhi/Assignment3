<?php
session_start();
unset($_Session['fname']);
session_destroy();
header('Location: index.php')
?>