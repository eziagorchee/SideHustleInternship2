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
    <title>Index</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome <span class="foont-weight-bold"><? echo $_SESSION['name']?></span>, this is our new page</h1>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolorum animi quibusdam incidunt. Optio distinctio dicta pariatur rerum atque dolore dolor adipisci! Aut, totam quam earum qui ipsum eaque culpa amet suscipit expedita non rerum porro nulla dignissimos explicabo eum quia quod iure, ipsam molestiae voluptates ullam. Ipsum, a qui.
        </p>
        <a href="index.php" class="btn btn-success">Click here to go index page</a>
        <a href="logout.php" class="btn btn-success">Click here to log out</a>
    </div>
</body>
</html>