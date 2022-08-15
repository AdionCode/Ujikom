<?php
include 'koneksi.php';

$username = $_POST['form-username'];
$pass = $_POST['form-password'];
$nama = $_POST['form-nama'];

$query = "INSERT INTO user(username, password, nama) VALUES  ('$username', '$pass', '$nama')";

mysqli_query($koneksi, $query);

header("location:form-login.php");

?>