<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "homework";
	$db = new mysqli($servername, $username, $password, $database);
	error_reporting(0);
	$sql = "SELECT * FROM users";
	$result = $db->query($sql)->fetch_all();
	session_start();
	if(isset($_POST["login"])){
		$_SESSION["session_username"] = $_POST["user"];
		for ($i=0; $i < count($result); $i++) { 
			if($_POST["user"] == $result[$i][1] && $_POST["pass"] == $result[$i][2]){
				echo '<script language="javascript">alert("Đăng nhập thành công"); window.location="profile.php";</script>';

				$_SESSION["userId"] = $result[$i][0];
			}
		}
	}
	$sql = "SELECT * from users where username = 'username' and password ='$password'";
	$db->query($sql)->fetch_all();	
?>  
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
            background-image: url("nen.png");
        }
		.border-style{
			padding: 40px 0px 0px 0px;
			opacity: 0.7;
			margin:auto;
			border: 1px solid #dcdcdc;
			width: 400px;
			height: 380px;
 			margin-bottom: 50px;
 			background-color: black;
 			color: white;
 			margin-top: 200px;
		}
		input{
			outline: none;
			margin-top: 20px;
			padding: 5px 8px;
			color: white;
			border: 0px;
			border-bottom: 1px solid white;
			background-color: black;
			width: 300px;
			height: 45px;
		}
		.title{
			font-size: 35px;
			font-weight: bold;
		}
		div label{
			margin-left: 25px;
		}
		button{
			margin-top: 20px;
			border: 0px;
			width: 300px;
			height: 35px;
			background-color: #008000;
			text-align: center;
			font-size: 20px;
			color: white;
		}
		button:hover {
            background: tomato;
            color: black;
        }
		a {
			color: white;
			position: relative;
			top: 20px;
		}
	</style>
</head>
<body>
	<form class="border-style" action="" method="post">
		<label class="title"><center>Login</center></label>
		<center><input type="text" name="user" placeholder="Username"></center><br>
		<center><input type="password" name="pass" placeholder="Password"></center><br>
		<center>
			<button type="submit" name="login">Login</button><br>
		</center>
	</form>
</body>
</html>