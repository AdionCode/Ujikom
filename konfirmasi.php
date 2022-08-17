<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    if (empty($_SESSION['login'])) {
        header("location:form-login.php");
    }
    include "koneksi.php";
    include("Navbar.php");
    $sql = "SELECT * FROM cart WHERE id='1'";
    $query = mysqli_query($koneksi, $sql);
    $laptop = mysqli_fetch_assoc($query);

    $nama = 'user';
    $alamat = 'jl. ';
    $notelp = '08';

    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $notelp = $_POST['notelp'];
    }

    include("harga.php");
    $noresi = rand(10, 100);
    $totalfix =  $laptop['asus'] * $hargaasus + $laptop['acer'] * $hargaacer + $laptop['hp'] * $hargahp;
    ?>
    <div>
        <div style="margin-left: 25px;">
            <h5>Data Buyer</h5>
            <p>No. Resi : <?php echo $noresi ?></p>
            <p>Nama : <?php echo $nama ?></p>
            <p>alamat : <?php echo $alamat ?></p>
            <p>No Telepon : <?php echo $notelp ?></p>
            <p>Total bayar : <?php echo "Rp. " . $laptop['asus'] * $hargaasus + $laptop['acer'] * $hargaacer + $laptop['hp'] * $hargahp  ?></p>
        </div>
    </div>
    <!--  -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Laptop</th>
                <th scope="col">Total</th>
                <th scope="col">Total Harga</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <tr>
                <th scope="row">1</th>
                <td>Asus</td>
                <td><?php echo $laptop['asus'] . " * Rp." . $hargaasus; ?></td>
                <td><?php echo "Rp. " . $laptop['asus'] * $hargaasus ?></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Acer</td>
                <td><?php echo $laptop['acer'] . " * Rp." . $hargaacer; ?></td>
                <td><?php echo "Rp. " . $laptop['acer'] * $hargaacer ?></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>HP</td>
                <td><?php echo $laptop['hp'] . " * Rp." . $hargahp; ?></td>
                <td><?php echo "Rp. " . $laptop['hp'] * $hargahp ?></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Lenovo</td>
                <td>- Sold Out -</td>
                <td>Rp. 0</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Zyrex</td>
                <td>- Sold Out -</td>
                <td>Rp. 0</td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <div class="row">
        <div class="col text-center">
            <form method="post">
                <input type="submit" name="button1" class="button btn btn-success" value="Checkout sekarang" />
            </form>
            <?php
            if (array_key_exists('button1', $_POST)) {
                button1($totalfix, $noresi);
            }
            function button1($totalharga, $nomorresi)
            {
                $message = "Silahkan lakukan pembayaran dengan total ".$totalharga." pada nomor resi" .$nomorresi. " Melalui atm BNI a/n Anonym";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }

            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>