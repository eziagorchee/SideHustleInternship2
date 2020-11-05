<?php
    require('connect.php');
    $name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director page</title>
    <meta charset="UTF-8">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
    <h1>Welcome Director, <?php echo $name?></h1>

    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Create Webmaster
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" placeholder="Fullname" id='name'>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" placeholder="Department" id='department'>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" placeholder="Password" id='password'>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id='webmaster'>
							Create
						</button>
					</div>

					<!-- <div class="text-center p-t-90">
						<a class="txt1" href="">
							Register User
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>

    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Create Student
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" placeholder="Fullname" id='s_name'>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <div class="wrap-input100">
						<input class="input100" type="text" placeholder="Matric Number" id='matric_number'>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" placeholder="Department" id='s_department'>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                    <div class="wrap-input100">
						<input class="input100" type="number" placeholder="Year of entry" id='year_of_entry'>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <div class="wrap-input100">
						<input class="input100" type="number" placeholder="Year of Graduation" id='year_of_graduation'>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" placeholder="Password" id='s_password'>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id='student'>
							Create
						</button>
					</div>

					<!-- <div class="text-center p-t-90">
						<a class="txt1" href="">
							Register User
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
    <script src="jquery.js"></script>

    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>

<script type="text/javascript">

    $(document).ready(function(){
        // $('#name').val('');
        // $('#department').val('');
        // $('#password').val('');
        //Webmaster creation
        $('#webmaster').on('click', function(e){
            e.preventDefault();
			var name=$('#name').val();
			var department=$('#department').val();
			var password=$('#password').val();
			console.log(name + " " +password)
			$.ajax({
				url:'function.php',
				method:'POST',
				data:{
					'submit':'create_webmaster',
					'department':department,
					'name':name,
					'password':password
				},
				success:function(response){
					if (response=='success') {
						alert(response)
                        $('#name').val('');
                        $('#department').val('');
                        $('#password').val('');
					}else {
						alert (response);
					}
				}
			})
        })
          //Student creation
        $('#student').on('click', function(e){
            e.preventDefault();
			var name=$('#s_name').val();
			var department=$('#s_department').val();
			var password=$('#s_password').val();
            var matric_number=$('#matric_number').val();
            var year_of_entry=$('#year_of_entry').val();
            var year_of_graduation=$('#year_of_graduation').val();
			console.log(name + " " +password)
			$.ajax({
				url:'function.php',
				method:'POST',
				data:{
					'submit':'create_student',
					'department':department,
					'name':name,
					'password':password,
                    'matric_number':matric_number,
                    'year_of_entry':year_of_entry,
                    'year_of_graduation':year_of_graduation
				},
				success:function(response){
					if (response=='success') {
						alert(response)
                        $('#s_name').val('');
                        $('#s_department').val('');
                        $('#s_password').val('');
                        $('#matric_number').val('');
                        $('#year_of_entry').val('');
                        $('#year_of_graduation').val('');
					}else {
						alert (response);
					}
				}
			})
        })
    })

</script>
</html>