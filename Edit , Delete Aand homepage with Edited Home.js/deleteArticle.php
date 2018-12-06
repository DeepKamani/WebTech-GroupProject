<?php

//confirm delete record
$articleId = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=li96_de-creation;charset=utf8mb4";
$dbusername = "li96";
$dbpassword = "*4#rGWcV2H&";

$db1 = $pdo = new PDO($dsn, $dbusername, $dbpassword);



$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `articleId` = $articleId");

$stmt->execute();

$row = $stmt->fetch();
?>
<h1>Are you sure you want to delete this record?</h1>
<!-- my code -->
<p>ID: <?php echo($row["articleId"]); ?></p>
<input type="hidden" value="<?php echo($row["articleId"]); ?>" name="articleId"/>
<p>Title: <input type='text' name='date' value="<?php echo($row["title"]); ?>"/></p>
<p>Author: <input type='text' name='author' value="<?php echo($row["author"]); ?>"/></p>
<p>Preview: <input type='text' name='category' value="<?php echo($row["preview"]); ?>"/></p>
<p>Description: <input type='text' name='title' value="<?php echo($row["description"]); ?>"/></p>
<p>Software used for your Work: <input type="text" name="preview" value="<?php echo($row["software"]); ?>"/></p>
<p>Category: <input type="text" name="category" value="<?php echo($row["category"]); ?>"/></p>

<p>Hashtags: <input type="number" name="hashtags" value="<?php echo($row["hashtags"]); ?>"/></p>

<p>Image: <input type="text" name="image_link" value="<?php echo($row["image"]); ?>"/></p>


<?php //interface for confirm or cancel ?>
<form action="ConfirmDelete.php" method="POST">
	<input type="hidden" value="<?php echo($row["articleId"]); ?>" name="articleId"/>
	<input type="submit" value="Confirm"/>
</form>
