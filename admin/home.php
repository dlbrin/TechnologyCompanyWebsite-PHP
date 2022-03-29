<?php include '../includes/config.php' ?>
<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<div class="all-details">
	<div class="all-details-card">
		<div class="card-info">
			<center><img src="assets/img/visitors.svg"></center>
			<div class="card-text">
				<h1>سەرەدانکەر</h1>
				<br>
				<br>
				<h1><?php dla('visitors');?></h1>
			</div>
		</div>
	</div>
	<div class="all-details-card" style="background-color: #279BCE;">
		<div class="card-info">
			<?php
			$query = mysqli_query($db, "SELECT * FROM `news`");
			$row = mysqli_num_rows($query);?>
			<center><img src="assets/img/news.svg"></center>
			<div class="card-text">
				<h1>هەواڵ</h1>
				<br>
				<br>
				<h1><?php echo $row;?></h1>
			</div>
		</div>
	</div>
	<div class="all-details-card" style="background-color: #D42B20;">
		<div class="card-info">
			<?php
			$query = mysqli_query($db, "SELECT * FROM `our-service`");
			$row = mysqli_num_rows($query);?>
			<center><img src="assets/img/service.svg"></center>
			<div class="card-text">
				<h1>خزمەتگوزاری</h1>
				<br>
				<br>
				<h1><?php echo $row;?></h1>
			</div>
		</div>
	</div>
	<div class="all-details-card" style="background-color: #E2E211;">
		<div class="card-info">
			<?php
			$query = mysqli_query($db, "SELECT * FROM `custom-app-development`");
			$row = mysqli_num_rows($query);?>
			<center><img src="assets/img/private.svg"></center>
			<div class="card-text">
				<h1>کارێن تایبەت</h1>
				<br>
				<br>
				<h1><?php echo $row;?></h1>
			</div>
		</div>
	</div>
	<div class="all-details-card" style="background-color: #11E293;">
		<div class="card-info">
			<?php
			$query = mysqli_query($db, "SELECT * FROM `courses`");
			$row = mysqli_num_rows($query);?>
			<center><img src="assets/img/course.svg"></center>
			<div class="card-text">
				<h1>کۆرس</h1>
				<br>
				<br>
				<h1><?php echo $row;?></h1>
			</div>
		</div>
	</div>
	<div class="all-details-card" style="background-color: #E21170;">
		<div class="card-info">
			<?php
			$query = mysqli_query($db, "SELECT * FROM `projects`");
			$row = mysqli_num_rows($query);?>
			<center><img src="assets/img/project.svg"></center>
			<div class="card-text">
				<h1>پرۆجێکت</h1>
				<br>
				<br>
				<h1><?php echo $row;?></h1>
			</div>
		</div>
	</div>
	<div class="all-details-card" style="background-color: #E18C27;">
		<div class="card-info">
			<?php
			$query = mysqli_query($db, "SELECT * FROM `user_courses_register`");
			$row = mysqli_num_rows($query);?>
			<center><img src="assets/img/register.svg"></center>
			<div class="card-text">
				<h1>تۆمارکرنێن کۆرسان</h1>
				<br>
				<br>
				<h1><?php echo $row;?></h1>
			</div>
		</div>
	</div>
	<div class="all-details-card" style="background-color: #98E127;">
		<div class="card-info">
			<?php
			$query = mysqli_query($db, "SELECT * FROM `contact`");
			$row = mysqli_num_rows($query);?>
			<center><img src="assets/img/contact.svg"></center>
			<div class="card-text">
				<h1>پەیوەندی</h1>
				<br>
				<br>
				<h1><?php echo $row;?></h1>
			</div>
		</div>
	</div>
</div>





