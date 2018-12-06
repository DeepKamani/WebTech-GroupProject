<?php

/* select data from one row in a database and display them in editable fields */

/* receive a record id*/
//myapp.com/edit.php?id=5
$articleId = $_GET['id'];

/* query database and retrieve recotd info based on the id*/
$dsn = "mysql:host=localhost;dbname=li96_de-creation;charset=utf8mb4";
$dbusername = "li96";
$dbpassword = "*4#rGWcV2H&";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `articleId` = $$articleId");

$stmt->execute();

$row = $stmt->fetch();

/* display data in editable fields of an update form*/
?>
<h1>Update record</h1>
<form action="confirm_update.php" method="POST">

<h2>Insert Article</h2>
	<fieldset>
	<h3>Aticle Metadata</h3>
	<p>id: <?php echo($row["articleId"]); ?></p>
	<input type="hidden"  name="articleId" value="<?php echo($row["articleId"]); ?>"/>
	<p>Title: <input type='text' name='date' value="<?php echo($row["title"]); ?>"/></p>
	<p>Author: <input type='text' name='author' value="<?php echo($row["author"]); ?>"/></p>
	<p>Preview: <input type='text' name='category' value="<?php echo($row["preview"]); ?>"/></p>
	<p>Description: <input type='text' name='title' value="<?php echo($row["description"]); ?>"/></p>
	<p>Software used for your Work: <input type="text" name="preview" value="<?php echo($row["software"]); ?>"/></p>
	<p>Category: <input type="text" name="category" value="<?php echo($row["category"]); ?>"/></p>
	<p>Hashtags: <input type="number" name="hashtags" value="<?php echo($row["hashtags"]); ?>"/></p>
	<p>Image: <input type="text" name="image_link" value="<?php echo($row["image"]); ?>"/></p>
	</fieldset>


	<input type="submit" value="edit"/>
</form>
