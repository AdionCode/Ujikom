<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle" style="width: 25em;">
        <h1 class="text-center fw-bold">LOGIN</h1>
        <form action="proses-login.php" method="post">
            <!-- Username  -->
            <div class="mb-3">
                <label for="username-form" class="form-label">Username</label>
                <input type="text" class="form-control" id="username-form">
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password-form" class="form-label">Password</label>
                <input type="password" class="form-control" id="password-form">
            </div>
            <!-- Register -->
            <div>
                <label>Dont have account? <a href="form-register.php" style="text-decoration: none;">Create Now</a></label>
            </div>
            <br>
            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" id="submit" value="Login" class="btn btn-primary" style="width: 8em;">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>