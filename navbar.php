<!-- NavBar -->
<nav class="navbar navbar-expand-lg bg-light fw-bold sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laptop World</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Ujikom/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Ujikom/product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Ujikom/cart.php">Cart</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-outline-success" href="logout.php" role="button">
                        <?php
                        echo $_SESSION['username'];
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>