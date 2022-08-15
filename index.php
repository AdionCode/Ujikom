<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laptop World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    if (empty($_SESSION['login'])) {
        header("location:form-login.php");
    }
    include("Navbar.php");
    ?>
    
    <!-- Home Page -->
    <section>
        <div style="height: 60vh; background-color: #F6F6F6">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div>
                    <div>
                        <h1 class="text-center">Welcome To</h1>
                        <h1 class="text-center fw-bold">Laptop World<span class="beranda"></span>.</h1>
                    </div>
                    <div class="text-center mt-4">
                        <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat sunt excepturi vero officia fugiat, amet distinctio vitae! Earum blanditiis, enim consequatur reprehenderit a reiciendis, mollitia consectetur eveniet cupiditate, autem laudantium?</p>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Home Page -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F6F6F6" fill-opacity="1" d="M0,96L40,112C80,128,160,160,240,149.3C320,139,400,85,480,64C560,43,640,53,720,80C800,107,880,149,960,170.7C1040,192,1120,192,1200,181.3C1280,171,1360,149,1400,138.7L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
    </svg>
    <!-- Description -->
    <section>
        <div style="height: 90vh; background-color: white">
            <div class="container text-center">
                <h1 class="fw-bold">Why you should buy here?</h1>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="/Ujikom/Image/dummy.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Original</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="/Ujikom/Image/dummy.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Terpecaya</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="/Ujikom/Image/dummy.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Quality</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--  -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#353535" fill-opacity="1" d="M0,64L40,74.7C80,85,160,107,240,112C320,117,400,107,480,90.7C560,75,640,53,720,80C800,107,880,181,960,202.7C1040,224,1120,192,1200,170.7C1280,149,1360,139,1400,133.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
    <!-- End -->
    <section>
        <div style="height: 20vh; background-color: #353535;"></div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>