<?
require('connect.php');

$action = "";

$action = $_POST['action'];

switch ($action) {
    case 'Register':
        register();
        break;
    
    case 'Login':
        login();
        break;
    
    default:
        echo "No action given";
        break;
}


function register() {
    global $db;
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password = md5($password);
    $sql = mysqli_query($db, "INSERT INTO users(username, password) VALUES('$username', '$password')");
    if($sql){
        $_SESSION['name'] = $username;
        $_SESSION['password'] = $password;
        echo "success";
    }
}
function login(){
    global $db;
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = md5(mysqli_real_escape_string($db, $_POST['pwd']));
    $sql = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND password = '$password' ");
    if($sql){
        if($result = mysqli_fetch_assoc($sql)){
            $_SESSION['name'] = $result['username'];
            $_SESSION['user_data'] = $result;
            echo "user exist";
        }else{
        echo "User does not exit";
        }

    }


}
?>