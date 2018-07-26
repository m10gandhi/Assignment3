<?php
session_start();
unset($_Session['first_name']);
session_destroy();
header('Location: index.html')
?>