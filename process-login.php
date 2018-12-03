<?php
session_start();
//receive username and passowrd
$email = $_POST['email'];
$pw = $_POST['pw'];


$dsn = "mysql:host=localhost;dbname=li96_de-creation;charset=utf8mb4";
$dbusername = "li96"; 
$dbpassword = "*4#rGWcV2H&";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("SELECT * FROM `login` WHERE `email` = '$email' AND `password` = '$password'");

$stmt->execute();

if($row = $stmt->fetch()){
	//start session if valid and redirect to dashboard
	$_SESSION['logged-in'] = true;
	$_SESSION['email'] = $row['email'];
	$_SESSION['pw'] = $row['password'];
	$_SESSION['id'] = $row['id'];

	header("Location: homepage.php");

}else{
	//redirect to login page if invalid
	header("Location: homepage.html");
}
?>