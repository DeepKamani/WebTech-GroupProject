<?php 
//receive values user submitted from form
$FullName = $_POST['FullName'];
$CountryCode = $_POST['CountryCode'];
$PhoneNumber = $_POST['PhoneNumber'];
$issue = $_POST['issue'];

//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=li96_de-creation;charset=utf8mb4";
$dbusername = "li96";
$dbpassword = "*4#rGWcV2H&";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `contact` (`id`,`FullName`, `CountryCode`,`PhoneNumber`,`issue`) VALUES (NULL, '$FullName', '$CountryCode',
	'$PhoneNumber','$issue')");

$stmt->execute();

header("Location: Contact-dashboard.php");
?>
