<?php include '../includes/config.php' ?>
<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<center>
	<div class="edit">
	    <img src="assets/img/news.gif">
	    <form method="POST" action="modal/edit_news.inc.php" enctype="multipart/form-data">
	    	<input type="text" name="title" placeholder="title">
	    	<br>
	    	<input type="text" name="content" placeholder="content">
	    	<br>
	    	<input type="file" name="file" accept="image/*">
	    	<br>
	    	<input type="date" name="date">
	    	<br>
	    	<button name="submit">INSERT</button>
	    </form>
	    <br>
	    <div class="cards">
	    	<?php
	        $query = mysqli_query($db, "SELECT * FROM `news`");
	        while($row = mysqli_fetch_assoc($query)){?>
	    		<div class="cards-details">
	    			<img src="../assets/img/<?php echo $row['image'];?>">
	    			<h1><?php echo $row['title'];?></h1>
	    			<p><?php echo $row['content'];?></p>
	    			<center>
	    			<div class="cards-button">
	    			    <button type="delete"><a href="modal/edit_news.inc.php?delete=<?php echo $row['id'];?>">ژێبە</a></button>
                        <button type="button" style="background-color: green;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id'];?>"> بگۆهرە </button>
	    			</div>
	    		    </center>
	    		</div>
	    		<!-- Modal -->
                <div class="modal fade" id="edit<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
      	                        <center>
      	                        <form method="POST" action="modal/edit_news.inc.php">
      	                        	<input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
      		                        <input type="text" name="title_edit" value="<?php echo $row['title'];?>">
      	                            <textarea name="content_edit" cols="55" rows="5"><?php echo $row['content'];?></textarea>
      	                            <button type="button" style="background-color: red;" class="btn btn-secondary btn-lg mt-2 w-25" data-bs-dismiss="modal">بگرە</button>
      	                            <button name="edit" class="btn btn-primary btn-lg mt-2 w-25">بگۆهرە</button>
                                </form>
      	                        </center>
                            </div>
                        </div>
                   </div>
                 </div>
	    	    <?php } ?>
	    	</div>
    </div>
</center>
