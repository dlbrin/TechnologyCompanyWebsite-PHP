<?php include '../includes/config.php' ?>
<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
if(isset($_GET['delete'])){
	$id = htmlspecialchars($_GET['delete']);
	$query = mysqli_query($db , "DELETE FROM `user_courses_register` WHERE `id` = '$id'");
	if($query){
		$success['result'] = "هاتە ژێبرن.";
	}
}
?>
<center>
	<div class="course-register">
		<img src="assets/img/register-course.jpg">
		<?php if(isset($_GET['delete'])){?><div class="success"><h1><?php echo $success['result'];?></h1></div><?php } ?>
		<div class="course-register-card">
			<?php
	        $query = mysqli_query($db , "SELECT * FROM `user_courses_register`");
	        while($row = mysqli_fetch_assoc($query)){ ?>
	        	<div class="user-card">
	        		<center><img src="assets/img/user-register.gif"></center>
	        		<h1>Name : <?php echo $row['name'];?></h1>
	        		<h1>Email : <?php echo $row['email'];?></h1>
	        		<h1>Phone : <?php echo $row['phone'];?></h1>
	        		<h1>Comment : <?php echo $row['comment'];?></h1>
	        		<h1>Course ID : <?php echo $row['course_id'];?></h1>
	        		<a href="courses_register.php?delete=<?php echo $row['id'];?>">
	        			<i class="fas fa-times"></i>
	        		</a>
	        	</div>
	        <?php } ?>
		</div>
	</div>
</center>