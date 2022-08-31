<?php
ob_start();
session_start();
include 'include/baglan.php';

 if(isset($_POST['record']))
 {
 $username = $_POST['username'];
 $password = $_POST['password'];
 $password_again = $_POST['password_again'];


 if(!$username)
 {  
  echo"Please enter your username.";
 }
 else if(!$password && !$password_again)
 {
 	echo"Please enter your password.";
 }
 else if($password != $password_again)
 {
 	echo "The passwords you entered are not the same!";
 }

else if($_POST["password"])
{
 $password = $_POST["password"];
 $control = "/\S*((?=\S{8,})(?=\S*[A-Z])(?=\S*[a-z]))\S*/";


 if(preg_match($control,$password))
 {  
   //database operations
   $query = $db->prepare('INSERT INTO user SET user_name = ?, user_pass = ?');
   $add = $query->execute([$username,$password]);
   if($add)
   {
      //You will enter the warehouse page.
      echo "Registration successful, you are redirected to login page.";
      header('Refresh:2; login.php');
   }
    else
    {
      echo"An error has occurred, please check again.";
    }

 }

  
 else
 {
  echo "<b> Error : </b>Your password must be at least 8 characters. It must contain lowercase and uppercase letters.";
 }

}
}

if(isset($_POST['login']))
 {
 $username = $_POST['username'];
 $password = $_POST['password'];

 if(!$username)
 {
 	echo"Please enter your username.";
 }
 else if(!$password)
 {
 	echo"Please enter your password.";
 }
 else
 {
 	$register_query = $db -> prepare('SELECT * FROM user WHERE user_name = ? && user_pass = ?');
 	$register_query -> execute([$username,$password]);

    $count = $register_query -> rowCount();

 	if($count==1)
 	{
 		$_SESSION['username'] = $username;
 		//echo"You are successfully logged in, you are being redirected";
 		//You will enter the warehouse page.
 		header('Refresh:1, index.php');
 	}
 	else
 	{
 		echo"An error has occurred please check again.";
 	}
 }
}
?>



<!DOCTYPE html>
<html>
<head>
<style>
body
  {

  background-image:url('loading.png'); 
  background-repeat :no-repeat;
  background-size: 1500px;
  background-position: center;
  }
</style>

</head>
</html>