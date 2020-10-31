<?php 
	include 'connect.php';

	// initialize variables
	$name = "";
	$age = "";
	$username="";
	$address="";
	$picture="";
	$id = 0;
	$update = false;
	//For Insert
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$username = $_POST['username'];
		$address = $_POST['address'];
		if(isset($_FILES['file'])) {
			//specifying the supported file extension
			$validextensions=['jpg','png','jpeg'];
			$ext=explode('.',basename($_FILES['file']['name']));
			//explode file name from dot(.)
			$file_extension=end($ext);
			//generate Name for the picture;
			$photoName="photo_".rand(100000,900000).".".$file_extension;
			$target_path=$photoName;
			$filesize= 5000000;
			if(($_FILES['file']['size'] <= $filesize) and in_array($file_extension,$validextensions)) {
				if(move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$photoName)) {
					echo "photo successfully uploaded";
					mysqli_query($con, "INSERT INTO crudtable (name, age,username,address,picture) VALUES ('$name', '$age','$username','$address','$photoName')"); 
		header('location: index.php');
				}
			} else{
				echo "File,not valid!!";
			}
		
		} else{
			echo "error";
		}
		
	}

		//For Update
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$username = $_POST['username'];
		$address = $_POST['address'];
		if(isset($_FILES['file'])) {
			//specifying the supported file extension
			$validextensions=['jpg','png','jpeg'];
			$ext=explode('.',basename($_FILES['file']['name']));
			//explode file name from dot(.)
			$file_extension=end($ext);
			//generate Name for the picture;
			$photoName="photo_".rand(100000,900000).".".$file_extension;
			$target_path=$photoName;
			$filesize= 5000000;
			if(($_FILES['file']['size'] <= $filesize) and in_array($file_extension,$validextensions)) {
				if(move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$photoName)) {
					echo "photo successfully uploaded";
					mysqli_query($con, "UPDATE crudtable SET name='$name', age='$age',username='$username',address='$address',picture='$photoName' WHERE id=$id");
		            header('location: index.php');
					
				}
			} else{
				echo "File,not valid!!";
			}
		
		} else{
			echo "error";
		}

		
	}
	//For Delete
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM crudtable WHERE id=$id");
	header('location: index.php');
}


?>