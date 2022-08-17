<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    if (empty($_SESSION['login'])) {
        header("location:form-login.php");
    }
    include("Navbar.php");
    include("harga.php");
    ?>

    <!--  -->
    <div class="mx-5 mt-5">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <div class="col">
                <div class="card text-center">
                    <img src="/Ujikom/Image/laptop.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Asus</h5>
                        <p class="card-text"><?php echo "Rp. ". $hargaasus ?></p>
                        <a href="proses-product.php?laptop=1" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img src="/Ujikom/Image/laptop2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Acer</h5>
                        <p class="card-text"><?php echo "Rp. ". $hargaacer ?></p>
                        <a href="proses-product.php?laptop=2" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img src="/Ujikom/Image/laptop3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laptop HP</h5>
                        <p class="card-text"><?php echo "Rp. ". $hargahp ?></p>
                        <a href="proses-product.php?laptop=3" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img src="/Ujikom/Image/laptopsold.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Lenovo</h5>
                        <p class="card-text">Rp. 9.000.000,00.</p>
                        <button type="button" class="btn btn-danger" disabled>Sold Out</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img src="/Ujikom/Image/laptopsold.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laptop Zyrex</h5>
                        <p class="card-text">Rp. 9.000.000,00</p>
                        <button type="button" class="btn btn-danger" disabled>Sold Out</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>