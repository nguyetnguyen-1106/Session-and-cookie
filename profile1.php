<?php
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['password'])){
		echo "Username: ".$_SESSION['username'];
		echo "<br/>";
		echo "Password: ".$_SESSION['password'];
	}
?>