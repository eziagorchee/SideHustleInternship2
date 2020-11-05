<?php 
	include 'connect.php';
	session_start();

	// initialize variables
	$name = "";
	$age = "";
	$username = "";
	$address = "";
	$image = "";
	$id = 0;
	$update = false;
	
	//For Insert
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$username = $_POST['username'];
		$address = $_POST['address'];

		//image upload
		if(isset($_FILES['file'])) {
			//specifying the supported file extension
			$validextensions=['jpg','png','jpeg'];
			$ext=explode('.',basename($_FILES['file']['name']));
			//explode file name from dot(.)
			$file_extension=end($ext);
			//generate Name for the picture;
			$image="image_".rand(100000,900000).".".$file_extension;
			$target_path=$image;
			$filesize= 5000000;
			if(($_FILES['file']['size'] <= $filesize) and in_array($file_extension,$validextensions)) {
				if(move_uploaded_file($_FILES['file']['tmp_name'],"images/".$image)) {
					echo "photo successfully uploaded";
					mysqli_query($con, "INSERT INTO crudtable (name, age, username, address, image) VALUES ('$name', '$age', '$username', '$address', '$image')");
					$_SESSION["msg"]="User details saved";  
					header('location: index.php');
				}
			} else{
				echo "File,not valid!!";
			}
		
		}

	
	}

		//For Update
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$username = $_POST['username'];
		$address = $_POST['address'];

		mysqli_query($con, "UPDATE crudtable SET name='$name', age='$age', username= '$username', address= '$address', image= '$image' WHERE id=$id");
		$_SESSION["msg"]="User details updated"; 
		header('location: index.php');
	}
	//For Delete
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM crudtable WHERE id=$id");
	header('location: index.php');
}


?>