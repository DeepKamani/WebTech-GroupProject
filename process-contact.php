<?php 
//receive values user submitted from form
$FullName = $_POST['FullName'];
$PhoneNumber = $_POST['PhoneNumber'];
$issue = $_POST['issue'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=li96_de-creation;charset=utf8mb4";
$dbusername = "li96";
$dbpassword = "*4#rGWcV2H&";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `contact` (`id`, `FullName`, `PhoneNumber`, `issue`) VALUES (NULL, '$FullName', 
	'$PhoneNumber', '$issue'); ");

$stmt->execute();

header("Location: thank you.php");
?>
