<?php
$conn = mysqli_connect("localhost", "root", "", "db_bukawarung")

?>

<?php

function registrasi($data)
{
    global $conn;

    $name = mysqli_real_escape_string($conn, $data["name"]);
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar');
            </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');        
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user ke database

    mysqli_query($conn, "INSERT INTO tb_user (name_user, email_user, username, password ) VALUES('$name', '$email', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

?>
