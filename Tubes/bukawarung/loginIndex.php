<?php 
// require 'functions.php';
include 'db.php';

if(isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }

    } else {
        echo '<script>alert("Username atau password salah!")</script>';
    }

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | BUkawarung</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@600&display=swap" rel="stylesheet">

</head>

<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" class="input-control">
            <input type="password" name="password" placeholder="Password" class="input-control">
            <p>Belum punya akun? <a href="register.php">Daftar</a></p>
            <input type="submit" name="login" value="Login" class="btn">
        </form>
    </div>
</body>

</html>