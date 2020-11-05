<?
require('connect.php');
print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Form</title>
</head>
<body>
    <div class="container mt-5 p-4">
        <div class="border border-black p-4">
            <h1>Register Form</h1>
            <form>
            <div class="form-group">
                <label for="email">Username:</label>
                <input type="text" class="form-control name" id="username" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <input type="submit" class="btn btn-primary" value="Register" id="submit" name="submit">
            </form>
        </div>

        <div class="border border-black p-4 mt-2">
            <h1>Login Form</h1>
            <form>
            <div class="form-group">
                <label for="email">Username:</label>
                <input type="text" class="form-control" id="l_username" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="password">
            </div>
            
            <input type="submit" class="btn btn-primary" value="Login" name="submit" id="login">
            </form>
        </div>
    </div>
</body>
<script src="jquery.js"></script>
<script type='text/javascript'>
$(document).ready(function(){
    // variables declaration
    // var, let, const

//    var number = 5;
//    var name = "sammy";
//    var array = [];
//    var obj = {};
   

//     document.querySelector('#submit').addEventListener('click', sayMyName)

//     function sayMyName(e){
//         e.preventDefault();
//         var username = document.querySelector('.name').value;
//         console.log(username);
//     }



$('#submit').on('click', function(e){
    e.preventDefault();
    var username = $('#username').val();
    var password = $('#password').val();
    $.ajax({
        url:'function.php',
        method: 'POST',
        data:{
            'username': username,
            'password': password,
            'action':'Register'
        },
        success:function(response){
            if(response == 'success'){
                location.href= 'index.php'
            }
        },
        error: function(response){
            console.log(response);
        }
    })
    

})


$('#login').on('click', function(a){
    a.preventDefault();
    var username = $('#l_username').val();
    var password = $('#pwd').val();
    if(username !== "" || password !== ""){
        console.log(password + username)
        $.ajax({
            url: 'function.php',
            method: 'POST',
            data: {
                username: username,
                pwd: password,
                action:'Login'
            },
            success: (response)=>{
                if(response === 'user exist'){
                    location.href = 'page.php';
                }
            },
            error: (response)=>{
                location.href = 'notfound.php'
            }
        })
    }


})

})

</script>
</html>