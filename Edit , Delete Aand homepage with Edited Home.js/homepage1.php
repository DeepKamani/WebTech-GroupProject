<?php 
//perform database insert using form values;
$dsn = "mysql:host=localhost;dbname=li96_de-creation;charset=utf8mb4";
$dbusername = "li96";
$dbpassword = "*4#rGWcV2H&";

$db1 = $pdo = new PDO($dsn, $dbusername, $dbpassword); 
// $db2 = $pdo = new PDO($dsn, $dbusername, $dbpassword); 
// $db3 = $pdo = new PDO($dsn, $dbusername, $dbpassword);
// $db4 = $pdo = new PDO($dsn, $dbusername, $dbpassword);
// $db5 = $pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt1 = $db1 = $pdo->prepare("SELECT * FROM `article` WHERE `articleId`='1'");
// $stmt2 = $db2= $pdo->prepare("SELECT * FROM `article` WHERE `feature`='Industry'");
// $stmt3 = $db3= $pdo->prepare("SELECT * FROM `article` WHERE `feature`='Technical'");
// $stmt4 = $db4= $pdo->prepare("SELECT * FROM `article` WHERE `feature`='Career'");
// $stmt5 = $db5= $pdo->prepare("SELECT * FROM `article` WHERE `featured_article`='1'");

$stmt1->execute();
// $stmt2->execute();
// $stmt3->execute();
// $stmt4->execute();
// $stmt5->execute();
?>

<!doctype html>
<html>
	<head>
		<title>HOMEPAGE</title>
		<link rel="shortcut icon" type="image/png" href="favicon.png"/>
		<meta character="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" href="./css/slider.css"> -->

		<!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> -->
	</head>
	<body id = "body">
  <div id="Sliders">
    <img src="./images/arrow.png" id="arrow1">
    <img src="./images/arrow2.png" id="arrow2">
    <div id="Slider">
  <div id="Slide1"><img src="./images/slider2.jpg" class="img">1</div>
  <div id="Slide2">
    <img src="./images/slider2.jpg" class="img">2
  </div>
  <div id="Slide3"><img src="./images/slider2.jpg" class="img">3</div>
  <div id="Slide4"><img src="./images/slider2.jpg" class="img">4</div>
  <div id="Slide5"><img src="./images/slider2.jpg" class="img">5</div>
  <div id="Slide6"><img src="./images/slider2.jpg" class="img">6</div>
  </div>
</div>
		<header class = "header">
			<div>
				<!-- <img src="./css/image/logo.png" id="image"/> -->
			</div>
		</header>
		<h1 style="text-align: center;">Masonry Grid Layout</h1>
<section class="grid-container">
  <div class="cols grid-area">
    <figure class="col grid-1">
      <?php
    while($row = $stmt1->fetch()){
      ?>
      <img src="<?php echo($row["image"]); ?>" alt="">
      <figcaption>
        <!-- <h2>Title</h2> -->
        <div class="grid-button-wrapper">
          <button class="rww_grid_button">More Info</button>
        </div>
        <p><?php echo($row["title"]); ?></p>
        <p><?php echo($row["author"]); ?></p>
        <p><?php echo($row["category"]); ?></p>
        <a href="#">View More</a>
      </figcaption>
          <?php }
    ?>
    </figure>
    <div class="col grid-2">
      <img src="https://placeimg.com/640/640/any" alt="">
    </div>
    <figure class="col grid-3">
      <img src="https://placeimg.com/640/640/arch" alt="">
      <figcaption>
        <!-- <h2>Title</h2> -->
        <div class="grid-button-wrapper">
          <button class="rww_grid_button">More Info</button>
        </div>
        <p>Filler sentance goes here. It's longer to demonstrate how the text wrapping works.</p>
        <a href="#">View More</a>
      </figcaption>
    </figure>
    <div class="col grid-4">
      <img src="https://placeimg.com/640/640/nature" alt="">
    </div>
    <div class="col grid-5">
      <span class="text-container">
          <p>Focus statement</p>
      </span>
    <img src="https://placeimg.com/640/640/tech" alt="">
    </div>
    <div class="col grid-6">
      <img src="https://placeimg.com/640/640/grayscale" alt="">
    </div>
    <div class="col grid-7">
      <img src="https://placeimg.com/640/640/sepia" alt="">
    </div>
    <div class="col grid-8">
    <img src="https://placeimg.com/640/640/any" alt="">
    </div>
  </div>
</section>
		<!-- <script src="./js/main.js" type="text/javascript"></script> -->
		<!-- <script src="main.pkgd.min.js"></script> -->
    <script src="js/home.js"></script>
	</body>
</html>