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
</script>
</html>