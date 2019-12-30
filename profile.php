<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "homework";
	$db = new mysqli($servername, $username, $password, $database);	
	session_start();
	if(isset($_SESSION['userId'])){
	$sql = "SELECT * FROM users WHERE id = ".$_SESSION["userId"];
	$result = $db->query($sql)->fetch_all();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Full Name</th>
	</tr>
	<tr>
		<td><?php echo $result[0][0]?></td>
		<td><?php echo $result[0][1]?></td>
		<td><?php echo $result[0][2]?></td>
		<td><?php echo $result[0][3]?></td>
	</tr>
</table>
</body>
