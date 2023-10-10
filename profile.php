<?php
session_start();
if($_SESSION['Username']){
	echo 'Hello: '.$_SESSION['Username'].'<br>This is profile...'.'<hr><a href="logout.php">Logout</a>';
}else{
	header('Location:login.php');
}

?>