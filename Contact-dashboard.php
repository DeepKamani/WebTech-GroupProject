<?php


$dsn = "mysql:host=localhost;dbname=li96_de-creation;charset=utf8mb4";
$dbusername ="li96";
$dbpassword ="*4#rGWcV2H&";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `contact`");

$stmt->execute();
?>

<!doctype html>
<html>
	<head>
		<title>Contact Dashboard</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Contact Records</h1>
		<a href="contact.html">Back to Contact Page</a>
		<section id="records">
			<h2>Contact records</h2>

			<?php
			//show records (process results)
			while($row = $stmt->fetch()) {
				//echo($row["email"]); //or $row[0];
				?><div>
					Id: <?php echo($row["id"]);?>
					<p>Full Name: <?php echo($row["FullName"]); ?></p>
					<p>Phone Number: <?php echo($row["PhoneNumber"]); ?></p>
					<p>CountryCode: <?php echo($row["CountryCode"]); ?></p>
					<p>Issue: <?php echo($row["issue"]); ?></p>
					<br/>

				</div>
			<?php }
			?>
		</section>

	</body>
</html>
