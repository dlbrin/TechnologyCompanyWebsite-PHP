<?php 
include '../../includes/config.php';
//insert data
if(isset($_POST['submit'])){
	$title = mysqli_real_escape_string($db, $_POST['title']);
	$content = mysqli_real_escape_string($db, $_POST['content']);
  $num = mysqli_real_escape_string($db, $_POST['num']);

	  $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];
  
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $fileAllowed = array('png' , 'jpg' , 'jpeg' , 'svg' , 'gif');
  
    if(in_array($fileActualExt , $fileAllowed)){
      if($fileError === 0){
        if($fileSize < 10000000){
  
          $fileNewName = rand().".".$fileActualExt;
          $fileDestinition = "../../assets/img/$fileNewName";
          move_uploaded_file($fileTmpName , $fileDestinition);

          $query = mysqli_query($db , "INSERT INTO `courses`(`title`, `content`, `num`, `course_img`) VALUES('$title', '$content', '$num', '$fileNewName')");

          if($query){
          	header('Location: ../edit_courses.php?success');
          }
        }
      }
    }

    if(empty($title) || empty($content) || empty($num) ||empty($file)){
      header('Location: ../edit_courses.php?error');
      }
}

//delete data
if(isset($_GET['delete'])){
	$id = htmlspecialchars($_GET['delete']);
	$query = mysqli_query($db , "DELETE FROM `courses` WHERE `id` = '$id'");
	if($query){
		header('Location: ../edit_courses.php?delete');
	}
}

//edit data
if(isset($_POST['edit'])){
	$title_edit = mysqli_real_escape_string($db, $_POST['title_edit']);
	$content_edit = mysqli_real_escape_string($db, $_POST['content_edit']);
  $num_edit = mysqli_real_escape_string($db, $_POST['num_edit']);
  $id_edit = mysqli_real_escape_string($db, $_POST['id']);

	$query = mysqli_query($db , "UPDATE `courses` SET `title`='$title_edit' , `content`='$content_edit' , `num`='$num_edit' WHERE `id` = '$id_edit'");
	          if($query){
          	header('Location: ../edit_courses.php?updated');
          }
        }
?>