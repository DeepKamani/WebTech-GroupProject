<?php

//perform a delete on a record
//receive id of record to delete.

$article_id = $_POST["articleId"];

//perform database delete using form values;
$dsn = "mysql:host=localhost;dbname=li96_de-creation;charset=utf8mb4";
$dbusername = "li96";
$dbpassword = "*4#rGWcV2H&";


$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("DELETE FROM `article` WHERE `articleId` = $articleId");

$stmt->execute();

header("Location: loggedin.php");

?>
