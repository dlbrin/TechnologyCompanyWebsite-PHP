<?php include '../includes/config.php' ?>
<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>

<center>
	<div class="edit">
		<img src="assets/img/project.gif">
	    <form method="POST" action="modal/edit_projects.inc.php" enctype="multipart/form-data">
	        <input type="text" name="name" placeholder="Name">
	        <br>
	        <input type="text" name="type" placeholder="Type">
	        <br>
	        <input type="text" name="WebLink" placeholder="Website Link">
	        <br>
	        <input type="text" name="AndroidLink" placeholder="Android Link">
	        <br>
	        <input type="text" name="AppleLink" placeholder="Apple Link">
	        <br>
	        <input type="file" name="file" accept="image/*">
	        <br>
	        <button name="submit" style="background-color: #6738EE;">INSERT</button>
	    </form>
	</div>

	<div class="projects-card">
		<?php
	    $query = mysqli_query($db , "SELECT * FROM `projects`");
	    while($row = mysqli_fetch_assoc($query)){ ?>
	    	<div class="our-projects-card">
	    		<center>
	    			<img src="../assets/img/<?php echo $row['images']; ?>">
	    			<h1><span>Name: </span><?php echo $row['name']; ?></h1>
	    			<h1><span>Type: </span><?php echo $row['type']; ?></h1>
	    			<br>
	    			<h2>Web Link: <br><a href="<?php echo $row['website_link']; ?>"><?php echo $row['website_link']; ?></a></h2>
	    			<h2>Apple Link: <br><a href="<?php echo $row['apple_link']; ?>"><?php echo $row['apple_link']; ?></a></h2>
	    			<h2>Android Link: <br><a href="<?php echo $row['android_link']; ?>"><?php echo $row['android_link']; ?></a></h2>
	    			<div class="card-buttons">
	    				<a href="modal/edit_projects.inc.php?delete=<?php echo $row['id'];?>"><button type="button" class="btn btn-outline-danger">ژێبە</button></a>
	    				<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id'];?>">بگۆهرە</button>
	    			</div>
	    		</center>
	    	</div>
	    	<!-- Modal -->
        <div class="modal fade" id="edit<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            	<div class="modal-content">
            		<div class="modal-body">
            			<form method="POST" action="modal/edit_projects.inc.php">
            			<center>
            				<input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
            				<input type="text" name="name_edit" value="<?php echo $row['name'];?>">
            				<input type="text" name="type_edit" value="<?php echo $row['type'];?>">
            				<input type="text" name="web_edit" value="<?php echo $row['website_link'];?>">
            				<input type="text" name="android_edit" value="<?php echo $row['android_link'];?>">
            				<input type="text" name="ios_edit" value="<?php echo $row['apple_link'];?>">
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
</center>