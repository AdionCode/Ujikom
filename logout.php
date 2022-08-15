<?php
include "koneksi.php";
session_start();
session_destroy();

$updateBrg = 0;
$query = "UPDATE cart SET asus='0', acer='0', hp='0' WHERE id='1'";
mysqli_query($koneksi, $query);

header("location:form-login.php");
