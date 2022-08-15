<?php
include 'koneksi.php';

$username = $_POST['username-form'];
$pass = $_POST['password-form'];
$nama = $_POST['nama-form'];

$select = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
if(mysqli_num_rows($select)) {
    header("location:form-register.php?error=1");
}

$query = "INSERT INTO user(username, password, nama) VALUES  ('$username', '$pass', '$nama')";

mysqli_query($koneksi, $query);

header("location:form-login.php");
