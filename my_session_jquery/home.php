<?php
    require 'connect.php';
    $name = $_SESSION['name'];
    if (isset($name)){

    }else{
        header('location: register.php');
    }
    // print_r($name)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>
    <h1>Logged in - <?php echo $name; ?></h1>
    <a href="logout.php" class="btn btn-success">Click here to log out</a>

</body>
</html>