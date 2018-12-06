
<?php

$articleId = $_POST['articleId'];
$title = $_POST['title'];
$author = $_POST['author'];
$preview = $_POST['preview'];
$description = $_POST['description'];
$hashtags = $_POST['hashtags'];
$type = $_POST['type'];
$software = $_POST['software'];
$sellable = $_POST['sellable'];
$price = $_POST['price'];

$dsn = "mysql:host=localhost;dbname=li96_de-creation;charset=utf8mb4";
$dbusername = "li96";
$dbpassword = "*4#rGWcV2H&";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `article` (`articleId`, `date`, `author`, `category`, `title`, `preview`, `content`, `featured`, `resource_link`, `image_link`, `viewmore`)
VALUES (NULL, '$date', '$author', '$category', '$title', '$preview', '$content', '$featured', '$resource_link', '$image_link', '$viewmore'); ");

$stmt->execute();
?>
