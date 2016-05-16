<?php
    session_start();
if (isset($_POST['email'])) { 
$email = $_POST['email']; 
if ($email == '') { unset($email);}
 } 
    if (isset($_POST['password'])) {
		$password=$_POST['password']; 
	if ($password =='') {
		unset($password);} }
  

   

    include ("connection.php"); 
 
    $result = mysqli_query($db,"SELECT * FROM tardis WHERE email='$email'"); 
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    
    echo("Sorry, wrong password or email.");
    }
    else {
    
    if ($myrow['password']==$password) {
    
    $_SESSION['email']=$myrow['email']; 
    $_SESSION['id']=$myrow['id'];
   /* echo "You are in! ";*/
	header("Location:index.html");
    }
 else {
   
	echo ("Sorry wrong password or email.");
    }
    }
    ?>