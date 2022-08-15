<?php
include("koneksi.php");

$data = $_GET['laptop'];

$sql = "SELECT * FROM cart WHERE id='1'";
$query = mysqli_query($koneksi, $sql);
$laptop = mysqli_fetch_assoc($query);

$updateBrg;

switch ($data) {
    case 1:
        $updateBrg = 0;
        $query = "UPDATE cart SET asus='" . $updateBrg . "' WHERE id='1'";
        break;
    case 2:
        $updateBrg = 0;
        $query = "UPDATE cart SET acer='" . $updateBrg . "' WHERE id='1'";
        break;
    case 3:
        $updateBrg = 0;
        $query = "UPDATE cart SET hp='" . $updateBrg . "' WHERE id='1'";
        break;
}

mysqli_query($koneksi, $query);

header("location:cart.php");
