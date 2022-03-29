<?php include "includes/nav.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>EasyTech Company</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <div class="course-background">
        <div class="course-text" >
            <h1 data-aos="zoom-in" data-aos-duration="1500">COURSES</h1>
            <h2 data-aos="zoom-in" data-aos-duration="1500"><a href="index.php">Home</a>&nbsp / &nbsp<a href="courses.php">Courses</a></h2>
        </div>
    </div>
    <br>
    <br>
    <div class="card">
        <?php
        $query = mysqli_query($db , "SELECT * FROM `courses`");
        while($row = mysqli_fetch_assoc($query)){?>
        <div class="card-details" data-aos="zoom-in" data-aos-duration="1500">
            <center><img src="assets/img/<?php echo $row['course_img']; ?>">
            <h1><?php echo $row['title']; ?></h1>
            <center><a href="view-course.php?name=<?php echo $row['title']; ?>"><button>READ MORE</button></a></center>
        </div>
        <?php } ?>
    </div>
    <?php include "includes/footer.php" ?>

<script>
  AOS.init();
</script>
</body>
</html>