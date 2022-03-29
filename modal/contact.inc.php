<?php include '../includes/config.php'; ?>
<?php
if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$subject = mysqli_real_escape_string($db, $_POST['subject']);
$message = mysqli_real_escape_string($db, $_POST['message']);

$query = mysqli_query($db , "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES('$name', '$email', '$subject', '$message')");
if($query)
{
	header('Location: ../index.php?thanku');
}
}


?>