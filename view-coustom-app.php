<?php include "includes/nav.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CUSTOM APP DEVELOPMENT</title>
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
        $name = htmlspecialchars($_GET['name']);
        $query = mysqli_query($db , "SELECT * FROM `custom-app-development` WHERE `title` = '$name'");
        while($row = mysqli_fetch_assoc($query)){ ?>
            <div class="coutsom-background">
                <div class="coustom-header">
                    <h1><?php echo $row['title'];?></h1>
                    <h2><a href="index.php">Home</a>&nbsp / &nbsp<a href="#"><?php echo $row['title']; ?></a></h2>
                </div>
            </div>
            <center>
                <div class="view-coustom-details">
                    <img src="assets/img/<?php echo $row['background']; ?>">
                    <h1><?php echo $row['title'];?></h1>
                    <p><?php echo $row['explain'];?></p>
                </div>
            </center>
    <?php } ?>
    <?php include "includes/footer.php" ?>
</body>
</html>