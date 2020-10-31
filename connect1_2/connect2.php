<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "test";

//Create Connection
try{
    $con = new PDO("mysql: host=$serverName; dbname=$dbname", $userName, $password);
    $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Success";
}
catch(PDOException $e) {
    echo "Error in Connection".$e->getMessage();
}



?>