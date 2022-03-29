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
    <div class="news-background">
        <div class="news-text">
            <h1 data-aos="zoom-in" data-aos-duration="1500">Easy Tech News</h1>
            <h2 data-aos="zoom-in" data-aos-duration="1500"><a href="index.php">Home</a>&nbsp / &nbsp<a href="news.php">News</a></h2>
        </div>
    </div>
    <br>
    <br>
    <div class="text">
        <h1 data-aos="zoom-in" data-aos-duration="1500">News</h1>
    </div>
    <div class="card" data-aos="zoom-in" data-aos-duration="1500">
        <?php
        $query = mysqli_query($db , "SELECT * FROM `news`");
        while($row = mysqli_fetch_assoc($query)){?>
        <div class="card-details">
            <center><img src="assets/img/<?php echo $row['image']; ?>">
            <h1><?php echo $row['title']; ?></h1>
            <h2><?php echo $row['date']; ?></h2></center>
            <center><a href="view-news.php?NewsName=<?php echo $row['title']; ?>"><button>READ MORE</button></a></center>
        </div>
        <?php } ?>
    </div>
    <?php include "includes/footer.php" ?>


<script>
  AOS.init();
</script>
</body>
</html>