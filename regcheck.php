<?php
	include("connection.php");
if(isset($_POST['name'])){
	$name = $_POST['name'];
}
if(isset($_POST['surname'])){
	$surname = $_POST['surname'];
}
if(isset($_POST['email'])){
	$email = $_POST['email'];
}
if(isset($_POST['password'])){
	$password = $_POST['password'];
}
    $result = mysqli_query($db, "SELECT * FROM tardis WHERE email='$email'");
	$row = $result->fetch_array();
    if (!empty($row['id'])) {
		echo "Sorry, this email have been signed. ";
		header("Location:index.html");
    }

    $result1 = mysqli_query($db,"INSERT INTO tardis (id,name,surname,email,password) VALUES (null,'$name','$surname','$email','$password')");
	$resNew = mysqli_query($db,"SELECT * FROM tardis WHERE email='$email'");
	$row2 = $resNew->fetch_array();
	if($row2['email']!=$email){
		echo "SHit happend";
	}else{
		echo "Hulk smash";
		header("Location:index.html");
	}



?>