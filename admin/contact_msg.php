<?php include '../includes/config.php' ?>
<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
if(isset($_GET['delete'])){
	$id = htmlspecialchars($_GET['delete']);
	$query = mysqli_query($db , "DELETE FROM `contact` WHERE `id` = '$id'");
	if($query){
		$success['result'] = "هاتە ژێبرن.";
	}
}
?>
<center>
	<div class="contact-msg">
		<img src="assets/img/contact.gif">
		<?php if(isset($_GET['delete'])){?><div class="success"><h1><?php echo $success['result'];?></h1></div><?php } ?>
		<div class="contact-msg-card">
			<?php
	        $query = mysqli_query($db , "SELECT * FROM `contact`");
	        while($row = mysqli_fetch_assoc($query)){ ?>
	        	<div class="user-msg-card">
	        		<center><img src="assets/img/user-contact.gif"></center>
	        		<h1>Name : <?php echo $row['name'];?></h1>
	        		<h1>Email : <?php echo $row['email'];?></h1>
	        		<h1>Phone : <?php echo $row['subject'];?></h1>
	        		<h1>Comment : <?php echo $row['message'];?></h1>
	        		<a href="contact_msg.php?delete=<?php echo $row['id'];?>">
	        			<i class="fas fa-times"></i>
	        		</a>
	        	</div>
	        <?php } ?>
		</div>
	</div>
</center>