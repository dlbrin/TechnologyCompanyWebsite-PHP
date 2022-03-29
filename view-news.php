<?php include "includes/nav.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
	<?php
		$NewsName = htmlspecialchars($_GET['NewsName']);
		$query = mysqli_query($db , "SELECT * FROM `news` WHERE `title` = '$NewsName'");
		while($row = mysqli_fetch_assoc($query)){ ?>
    <div class="news-background">
        <div class="news-text" data-aos="zoom-in" data-aos-duration="1500">
            <h1><?php echo $row['title']; ?></h1>
            <h2><a href="index.php">Home</a>&nbsp / &nbsp<a href="news.php">News</a>&nbsp / &nbsp<a href="#"><?php echo $row['title']; ?></a></h2>
        </div>
    </div>
    <br>
    <br>
    <center>
    <div class="view-details">
    	<div class="view-details-images" data-aos="fade-up-right" data-aos-duration="1500">
    		<img src="assets/img/<?php echo $row['image']; ?>">
    		<h1><?php echo $row['date']; ?></h1>
    	</div>
    	<div class="view-details-text" data-aos="fade-up-left" data-aos-duration="1500">
    		<h1><?php echo $row['title']; ?></h1>
    		<p><?php echo $row['content']; ?></p>
    		<a href="https://www.facebook.com/2019EasyTech/"><button>Open Link</button></a>
    	</div>
    </div>
    </center>
    <?php } ?>
    <?php include "includes/footer.php" ?>

<script>
  AOS.init();
</script>
</body>
</html>		
