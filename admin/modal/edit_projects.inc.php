<?php 
include '../../includes/config.php';
//insert data
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$type = mysqli_real_escape_string($db, $_POST['type']);
  $WebLink = mysqli_real_escape_string($db, $_POST['WebLink']);
  $AndroidLink = mysqli_real_escape_string($db, $_POST['AndroidLink']);
  $AppleLink = mysqli_real_escape_string($db, $_POST['AppleLink']);

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

          $query = mysqli_query($db , "INSERT INTO `projects`(`name`, `type`, `website_link`, `apple_link`, `android_link`, `images`) VALUES('$name', '$type', '$WebLink', '$AppleLink', '$AndroidLink', '$fileNewName')");

          if($query){
          	header('Location: ../edit_projects.php?success');
          }
        }
      }
    }

    if(empty($name) || empty($type) || empty($file)){
      header('Location: ../edit_projects.php?error');
      }
}

//delete data
if(isset($_GET['delete'])){
	$id = htmlspecialchars($_GET['delete']);
	$query = mysqli_query($db , "DELETE FROM `projects` WHERE `id` = '$id'");
	if($query){
		header('Location: ../edit_projects.php?delete');
	}
}

//edit data
if(isset($_POST['edit'])){
	$name_edit = mysqli_real_escape_string($db, $_POST['name_edit']);
	$type_edit = mysqli_real_escape_string($db, $_POST['type_edit']);
  $web_edit = mysqli_real_escape_string($db, $_POST['web_edit']);
  $android_edit = mysqli_real_escape_string($db, $_POST['android_edit']);
  $ios_edit = mysqli_real_escape_string($db, $_POST['ios_edit']);
  $id_edit = mysqli_real_escape_string($db, $_POST['id']);

	$query = mysqli_query($db , "UPDATE `projects` SET `name`='$name_edit' , `type`='$type_edit' , `website_link`='$web_edit', `apple_link`='$ios_edit' , `android_link`='$android_edit' WHERE `id` = '$id_edit'");
	          if($query){
          	header('Location: ../edit_projects.php?updated');
          }
        }
?>