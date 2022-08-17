<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle" style="width: 25em;">
        <h1 class="text-center fw-bold">REGISTER</h1>
        <form action="proses-register.php" method="post">
            <!-- Nama 
            <div class="mb-3">
                <label for="nama-form" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama-form" name="nama-form" required>
            </div> -->
            <!-- Username  -->
            <div class="mb-3">
                <label for="username-form" class="form-label">Username</label>
                <input type="text" class="form-control" id="username-form" name="username-form" required>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password-form" class="form-label">Password</label>
                <input type="password" class="form-control" id="password-form" name="password-form" required>
            </div>
            <!-- Register -->
            <div>
                <label>Already have account? <a href="form-login.php" style="text-decoration: none;">Login Now</a></label>
            </div>
            <br>
            <!-- Submit Button -->
            <?php
            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($_GET['error'] == 1) {
                    echo "<p>Username has already taken!</p>";
                }
            }
            ?>
            <div class="text-center">
                <button type="submit" id="submit" value="Login" class="btn btn-primary" style="width: 8em;">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>