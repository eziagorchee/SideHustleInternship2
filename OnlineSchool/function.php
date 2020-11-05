<?php
require('connect.php');

$director='Director';
$webmaster='Webmaster';

//functions to create ict staffs
function create_staff($role){
    global $con;
    $name= mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password);
    $department= mysqli_real_escape_string($con, $_POST['department']);
    $sql = mysqli_query($con, "INSERT INTO ict staff(Name, Password,Department,Role) VALUES('$name', '$password','$department','$role')");
    if($sql){
        $_SESSION['name'] = $name;
        echo "success";
    }
}

//functions to create  students
function create_students(){
    global $con;
    $name= mysqli_real_escape_string($con, $_POST['name']);
    $matric_number= mysqli_real_escape_string($con, $_POST['matric_number']);
    $year_of_entry= mysqli_real_escape_string($con, $_POST['year_of_entry']);
    $year_of_graduation= mysqli_real_escape_string($con, $_POST['year_of_graduation']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password);
    $department= mysqli_real_escape_string($con, $_POST['department']);
    $sql = mysqli_query($con, "INSERT INTO students(name, password,department,matric_number,year_of_entry,year_of_graduation) VALUES('$name', '$password','$department','$matric_number','$year_of_entry','$year_of_graduation')");
    if($sql){
        $_SESSION['name'] = $name;
        echo "success";
    }

    
}
// function to login staff
function staff_login(){
    global $con;
    $name= mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password);
    $sql = mysqli_query($con, "SELECT * FROM ict staff WHERE Name = '$username' AND Password = '$password' ");
    if($sql){
        if($result = mysqli_fetch_assoc($sql)){
            echo $result['Role'];
        }else{
        echo "User does not exit";
        }

    }


}

// function to login students
function student_login(){
    global $con;
    $name= mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password);
    $sql = mysqli_query($con, "SELECT * FROM students WHERE name = '$username' AND password = '$password' ");
    if($sql){
        if($result = mysqli_fetch_assoc($sql)){
            $_SESSION['name'] = $result['name'];
            $_SESSION['user_data'] = $result;
            echo "user exist";
        }else{
        echo "User does not exit";
        }

    }


}

//switch statement
$action=$_POST['submit'];
switch ($action) {
    case 'staff_login':
        staff_login();
        break;
    case 'student_login':
        student_login();
        break;
    case 'create_director':
        create_staff($director);
        break;
    case 'create_webmaster':
        create_staff($webmaster);
        break;
    case 'create_student':
        create_students();
        break;
    default:
        echo 'no action';
        break;
}


?>