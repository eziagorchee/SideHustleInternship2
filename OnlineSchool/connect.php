<?php
$ServerName = "localhost";
$UserName = "root";
$password = "";
$dbname = "oau e-portal";
session_start();

//Create Connection
$con = mysqli_connect($ServerName,$UserName,$password,$dbname);
if (mysqli_connect_errno()) {
    echo "Failed to Connect!";
    exit();
}





?>