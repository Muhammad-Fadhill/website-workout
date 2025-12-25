<?php
require 'db.php'; // koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name  = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // CEK EMAIL SUDAH TERDAFTAR
    $cek = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>
            alert('Email sudah terdaftar!');
            window.location='register.php';
        </script>";
        exit;
    }

    // INSERT USER BARU
    $query = "INSERT INTO users (name, email, password)
              VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
            alert('Pendaftaran berhasil! Silakan login.');
            window.location='login.html';
        </script>";
    } else {
        echo "<script>
            alert('Pendaftaran gagal!');
            window.location='register.php';
        </script>";
    }
}
?>
