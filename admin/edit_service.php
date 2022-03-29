<?php include '../includes/config.php' ?>
<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<center>
	<div class="edit">
		<img src="assets/img/service.gif">
		<form method="POST" action="modal/edit_service.inc.php" enctype="multipart/form-data">
	        <input type="text" name="title" placeholder="title">
	    	<br>
	    	<input type="text" name="content" placeholder="content">
	    	<br>
	    	<input type="file" name="file" accept="image/*">
	    	<br>
	    	<button name="submit">INSERT</button>
	    </form>
	</div>
	<br>
	<div class="service-card">
		<?php
		$query = mysqli_query($db , "SELECT * FROM `our-service`");
		while($row = mysqli_fetch_assoc($query)){ ?>
			<div class="our-card">
				<center>
					<img src="../assets/img/<?php echo $row['images']; ?>">
					<h1><?php echo $row['title']; ?></h1>
					<p><?php echo $row['content']; ?></p>
					<div class="card-buttons">
						<a href="modal/edit_service.inc.php?delete=<?php echo $row['id'];?>"><button type="button" class="btn btn-outline-danger">ژێبە</button></a>
						<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id'];?>">بگۆهرە</button>
					</div>
				</center>
			</div>
			<!-- Modal -->
            <div class="modal fade" id="edit<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            	<div class="modal-dialog">
            		<div class="modal-content">
            			<div class="modal-body">
            				<form method="POST" action="modal/edit_service.inc.php">
            					<input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
            					<input type="text" name="title_edit" value="<?php echo $row['title'];?>">
            					<input type="text" name="content_edit" value="<?php echo $row['content'];?>">
            					<br>
            					<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">بگرە</button>
            					<button name="edit" class="btn btn-outline-success">بگۆرە</button>
            				</form>
            			</div>
            		</div>
            	</div>
            </div>
		<?php } ?>
	</div>
</center>