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

    ?>

    <!--  -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Laptop</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <th scope="row">1</th>
                <td>Asus</td>
                <td><?php echo $laptop['asus']; ?></td>
                <td><?php echo $laptop['asus']; ?></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Acer</td>
                <td><?php echo $laptop['acer']; ?></td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>HP</td>
                <td><?php echo $laptop['hp']; ?></td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Lenovo</td>
                <td>- Sold Out -</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Zyrex</td>
                <td>- Sold Out -</td>
                <td>@fat</td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>