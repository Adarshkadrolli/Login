<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'login');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pass = $_POST['password'];

$s = "select * from log where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Username already Taken";
}else{
	$reg= " insert into log(name , email , mobile , password) values ('$name' , '$email' , '$mobile' , '$pass')";
	mysqli_query($con, $reg);
	echo" Registration successful";
}

?>