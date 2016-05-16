<?php
    session_start();
if (isset($_POST['email'])) { 
$email = $_POST['email']; 
if ($email == '') { unset($email);}
 } 
    if (isset($_POST['name'])) {
		$password=$_POST['name']; 
	if ($password =='') {
		unset($password);} }
  

   

    include ("connection.php"); 
 
    $result = mysqli_query($db,"SELECT * FROM tardis WHERE email='$email'"); 
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['name']))
    {
    
    echo("Sorry, wrong password or email.");
    }
    else {
    
    if ($myrow['name']==$name) {
    
    $_SESSION['email']=$myrow['email']; 
    $_SESSION['id']=$myrow['id'];
      echo "You are in! ";
    }
 else {
   
	echo ("Sorry wrong password or email.");
    }
    }
    ?>