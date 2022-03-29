<?php include "../includes/config.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <center>
            <div class="details">
                <img src="../assets/img/EasyTechLogo.png">
                <form method="POST" action="modal/login.php">
                    <input type="text" name="username" placeholder="UserName">
                    <br>
                    <input type="password" name="password" placeholder="Password">
                    <br>
                    <input type="submit" name="submit">
                </form>
            </div>
        </center>
    </div>
</body>
</html>