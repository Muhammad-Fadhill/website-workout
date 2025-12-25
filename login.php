<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($result);

if ($user) {
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['name'];
        header("Location: index.php");
        exit;
    } else {
        echo "<script>
                alert('Password salah');
                window.location='login.html';
              </script>";
    }
} else {
    echo "<script>
            alert('Belum ada akun, silakan signup terlebih dahulu.');
            window.location='login.html';
          </script>";
}
?>
