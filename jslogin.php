<?php
session_start();
require_once('config.php');


$username = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM info WHERE EMAIL = ? AND PSSWRD = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['userlogin'] = $user;
		echo 'You are loged-in.';
	}else{
		echo 'Wrong E-mail or password.';		
	}
}else{
	echo 'There were errors while connecting to database.';
}