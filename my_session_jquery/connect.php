<?php
session_start();
$ServerName = "localhost";
$UserName = "root";
$password = "";
$dbname = "sessionsample";

//Create Connection
$con = mysqli_connect($ServerName,$UserName,$password,$dbname);
if (mysqli_connect_errno()) {
    echo "Failed to Connect!";
    exit();
}





?>