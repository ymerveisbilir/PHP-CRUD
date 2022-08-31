<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>Kütüphane</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
		<div class="login">
		<div class="login-screen">
		  <form action="logindb.php" method="post">
           <div class="login-form">
           	<div class="control-group">
               <div class="imgcontainer">
				<label>Kütüphane Sistemine Giriş</label><br><br>
               <img src="user.png" alt="Avatar" class="avatar">
               </div>
           		<input type="text" name="username" class="login-field" placeholder="Username" id="login-name">
           		<label class="login-field-icon fui-user" for="login-name"></label>
           	</div>
           	<div class="control-group">
           		<input type="password" name="password" class="login-field" placeholder="Password" id="login-pass">
           		<label class="login-field-icon fui-user" for="login-pass"></label>
           	</div>
           	<button href="login.php" name ="login" class="btn btn-primary btn-large btn-block">Sign İn</button>
           </div>
         </form>
         <a href="record.php"><button  name="record" class="btn btn-primary btn-large btn-block">Sign Up</button></a>
       </div>	
   </div>

</body>
<style>
	
*{
	box-sizing: border-box;
    text-decoration: none;
 }
 *:focus{
 	outline: none;
 }
 body{
 	font-family: Arial;
 	background: #ECF0F1;
 	padding: 50px;
 }
 .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 50%;
  border-radius: 50%;
}
 .login{
 	margin: 110px auto;
 	width:  300px;
 }
 .login-screen{
 	background-color: #fff;
 	padding: 20px;
 }
 
 .login-form{
 	text-align: center;
 }
 .control-grup{
 	margin-bottom: 10px;
 }
 input{
 	text-align: center;
 	background-color: #ECF0F1;
 	border : 2px solid transparent;
 	border-radius: 3px;
 	font-size: 16px;
 	font-weight: 200;
 	padding: 10px 0;
 	width: 250px;
 	transition: border .5s;
 }
 input:focus{
 	border: 2px solid #3498DB;
 	box-shadow: none;
 }
 .btn{
 	border: 2px solid transparent;
 	background: orange;
 	color: #ffffff;
 	font-size: 16px;
 	line-height: 25px;
 	padding: 10px 0;
 	text-decoration: none;
 	text-shadow: none;
 	border-radius: 3px;
 	transition: 0.25s;
 	display: block;
 	width: 250px;
 	margin: 0 auto;
 	margin-top: 5px;
 }
 .btn:hover{
 	background-color:green;
 }

</style>
</html>