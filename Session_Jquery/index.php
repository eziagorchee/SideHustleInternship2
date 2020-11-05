<?
require('connect.php');
if(isset($_SESSION['name'])){
    if($_SESSION['name'] === "Sammy"){
        print_r($_SESSION);
    }
}else{
    header('location: register.php');
}
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
        <h1>Welcome <span class="foont-weight-bold"><? echo $_SESSION['name']?></span>, this is our index page</h1>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolorum animi quibusdam incidunt. Optio distinctio dicta pariatur rerum atque dolore dolor adipisci! Aut, totam quam earum qui ipsum eaque culpa amet suscipit expedita non rerum porro nulla dignissimos explicabo eum quia quod iure, ipsam molestiae voluptates ullam. Ipsum, a qui.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem aliquam doloremque libero repudiandae non autem a voluptatibus voluptatem labore, veniam, quia molestias, fuga maxime. Nihil laboriosam exercitationem iste tenetur obcaecati incidunt quaerat quam eaque aspernatur. Illo consequatur doloribus, accusamus sapiente soluta, necessitatibus dignissimos doloremque harum eveniet perspiciatis quae nostrum architecto.
        </p>
        <a href="page.php" class="btn btn-success">Click here to go next page</a>
    </div>
</body>
</html>