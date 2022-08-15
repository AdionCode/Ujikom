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
    $_SESSION['nama'] = $data['nama'];

    $remember = $_POST['remember'];

    if ($remember != '') {
        $kodeacak = hash('sha256', $username);
        setcookie('login', $kodeacak, time() + 3600);
    }

    header("location:index.php");
} else {
    echo $username . $pass;
}
