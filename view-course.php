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
    <?php
    $title = htmlspecialchars($_GET['name']);
    $query = mysqli_query($db , "SELECT * FROM `courses` WHERE `title` = '$title'");
    while($row = mysqli_fetch_assoc($query)){ 
        $_SESSION['userid'] = $row['id'];
        $id2 = $_SESSION['userid'];
        ?>
    <div class="course-background">
        <div class="course-text">
            <h1 data-aos="zoom-in" data-aos-duration="1500"><?php echo $row['title']; ?></h1>
            <h2 data-aos="zoom-in" data-aos-duration="1500"><a href="index.php">Home</a>&nbsp / &nbsp<a href="courses.php">Courses</a>&nbsp / &nbsp<a href="#"><?php echo $row['title']; ?></a></h2>
        </div>
    </div>
    <br>
    <br>
    <center>
    <div class="view-details">
        <div class="view-details-images" data-aos="fade-up-right" data-aos-duration="1500">
            <img src="assets/img/<?php echo $row['course_img']; ?>">
        </div>
        <div class="view-details-text" data-aos="fade-up-left" data-aos-duration="1500">
            <h1><?php echo $row['title']; ?></h1>
            <p><?php echo $row['content']; ?></p>
            <a href="https://www.facebook.com/2019EasyTech/"><button>Open Link</button></a>
        </div>
    </div>
    </center>
    <?php } ?>

<?php
if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $comment = mysqli_real_escape_string($db, $_POST['comment']);

    $id2 = $_SESSION['userid'];
    $query1 = mysqli_query($db , "INSERT INTO `user_courses_register`(`name`, `email`, `phone`, `comment`, `course_id`) VALUES ('$name', '$email', '$phone', '$comment', '$id2')");

    if($query){
        header('Location: courses.php?success');?>

   <?php }
}
?>
<center>
    <div class="register">
        <h1>Register Your Name !</h1>
        <form method="POST" action="view-course.php" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Your Name">
            <br>
            <input type="text" name="email" placeholder="Your Email">
            <br>
            <input type="text" name="phone" placeholder="Your Number">
            <br>
            <input type="text" name="comment" placeholder="Your Comment">
            <br>
            <button type="sumbit" name="submit">Register</button>
        </form>
    </div>
</center>



<?php include "includes/footer.php" ?>
    <script>
  AOS.init();
</script>
</body>
</html>