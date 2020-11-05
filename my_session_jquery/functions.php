<?php
require('connect.php');

$action="";
$action=$_POST['submit'];  //Using the key,,"submit",we got the value, and stored in action...we need a switch case statement to differenciate between the two functions,ie login n register
switch($action){
    case ("Register"):
        register();
    break;
    case("Login"):
        login();
    break;
    default:
    echo "No action!!!";

}


function register(){
    global $con;
    $name=mysqli_real_escape_string($con, $_POST['username']);
    $password=mysqli_real_escape_string($con, md5($_POST['password']));
    $reg= mysqli_query($con, "INSERT INTO user (username, password) VALUES ('$name', '$password')");
    if ($reg){
        $_SESSION['name'] = $name;
       // header('location: home.php');
       echo "success";
    } else{
        echo 'error';
    } 
		

}

function login(){
    global $con;
    $name=mysqli_real_escape_string($con, $_POST['name']);
    $password=mysqli_real_escape_string($con, md5($_POST['password']));
    $login= mysqli_query($con, "SELECT * FROM user WHERE username='$name' AND password= '$password' ");
    if ($login){
        $result= mysqli_fetch_assoc($login);
        if($result){
            $_SESSION['name'] = $name;
            //header('location: home.php');
            echo 'user exits';
        }else{
            echo "user not found";
        }
        
    } else{
        echo 'error';
    } 

}
?>