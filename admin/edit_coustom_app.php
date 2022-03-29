<?php include '../includes/config.php' ?>
<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<center>
<div class="edit">
	<img src="assets/img/private.gif">
	<form method="POST" action="modal/edit_coustom_app.inc.php" enctype="multipart/form-data">
	    <input type="text" name="title" placeholder="title">
	    <br>
	    <textarea name="content" placeholder="content" cols="55" rows="5"></textarea>
	    <br>
	    <textarea name="explain" placeholder="explain" cols="55" rows="5"></textarea>
	    <br>
	    <input type="file" name="file" accept="image/*">
	    <br>
	    <button name="submit">INSERT</button>
	</form>
</div>
</center>

<div class="coustom-card">
	<?php
	$query = mysqli_query($db , "SELECT * FROM `custom-app-development`");
	while($row = mysqli_fetch_assoc($query)){ ?>
		<center>
			<div class="our-coustom-card">
			<div class="card-image">
			    <center><img src="../assets/img/<?php echo $row['images']; ?>">
			    	<h1><?php echo $row['title']; ?></h1></center>
		    </div>
		    <div class="card-text">
		        <p><span>Content:</span> <?php echo $row['content']; ?></p>
		        <p><span>Explain:</span> <?php echo $row['explain']; ?></p>
		        <a href="modal/edit_coustom_app.inc.php?delete=<?php echo $row['id'];?>"><button type="button" class="btn btn-outline-danger">ژێبە</button></a>
		        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id'];?>">بگۆهرە</button>
		    </div>
		</div>
		</center>
		<!-- Modal -->
        <div class="modal fade" id="edit<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            	<div class="modal-content">
            		<div class="modal-body">
            			<form method="POST" action="modal/edit_coustom_app.inc.php">
            			<center>
            				<input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
            				<input type="text" name="title_edit" value="<?php echo $row['title'];?>">
            				<textarea name="content_edit" cols="55" rows="5"><?php echo $row['content'];?></textarea>
            				<textarea name="explain_edit" cols="55" rows="5"><?php echo $row['explain'];?></textarea>
            				<br>
            				<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">بگرە</button>
            				<button name="edit" class="btn btn-outline-success">بگۆرە</button>
            			</center>
            			</form>
            		</div>
            	</div>
            </div>
        </div>
	<?php } ?>
</div>