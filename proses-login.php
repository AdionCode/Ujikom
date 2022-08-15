<?php
include 'koneksi.php';

$username = $_POST['username-form'];
$pass = $_POST['password-form'];

$sql = "SELECT * FROM user WHERE username='$username' and password='$pass'";
$query = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($query) > 0) {
    echo "chec2";
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['login'] = TRUE;
    $_SESSION['username'] = $data['username'];

    header("location:index.php");
} else {
    echo $username . $pass;
}
