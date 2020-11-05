<?php
session_start();
unset($_SESSION['name']);
header('location: register.php');
echo 'Logged out';

?>