<?php include '../../includes/config.php' ?>

<?php
if(isset($_POST['submit'])){
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if(empty($username) || empty($password)){
    exit("خالان پر بکە");
    die();
}else{
    $password = hash('gost', $password); 
    $query = mysqli_query($db , "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'");
    if(mysqli_num_rows($query) == 1){
        while($row = mysqli_fetch_assoc($query)){
            $_SESSION['userid'] = $row['id'];
            header('Location: ../home.php');
        }
        die();
    }else{
        exit("هیچ بکارهێنەر ب ڤی ناڤی نینە");
        die();
    }
}
}
?>