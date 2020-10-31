<?php
$ServerName = "localhost";
$UserName = "root";
$password = "";
$dbname = "test";

//Create Connection
$con = mysqli_connect($ServerName,$UserName,$password,$dbname);
if (mysqli_connect_errno()) {
    echo "Failed to Connect!";
    exit();
}
echo "Connection Success!";




?>