<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'login');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pass = $_POST['password'];

$s = "select * from log where email = '$email' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['email'] = $email;
	header('location:home.php');
}else{
	header('location:login.php');
}

?>