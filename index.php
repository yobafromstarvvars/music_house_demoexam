<?php 
$products = require __DIR__."/scripts/getAllProducts.php";
arsort($products);
$first_product = $products[0];
$new_products = array_slice($products, 1, 4, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/bootstrap.css">
    <script defer src="assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>About</title>
</head>
<body class="min-vh-100 d-flex flex-column">
    <header>
        <!-- Navbar -->
        <?php include_once "common/navbar.php" ?>
    </header>
    <main class="flex-grow-1">
        <!-- Hero -->
        <section class="section bg-dark py-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-light text-center text-lg-start">
                        <h2 class="text-warning fw-bold">Music House</h2>
                        <blockquote>Best house on the street</blockquote>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, tempora?</p>
                        <a href="/app/catalog.php" class="btn btn-primary">Go to catalog</a>
                    </div>
                    <img class="w-50 d-none d-lg-flex" src="assets/img/logo.png" alt="Music House logo">
                </div>
            </div>
        </section>
        <!-- Slider -->
        <section class="py-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" data-bs-theme="dark">
                
                <div class="carousel-inner">
                    <!-- Slider item -->
                  <div class="carousel-item active">
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center hstack gap-4">
                        <img src="<?php echo $first_product ["image_link"]; ?>" class="d-block slider-img" alt="Product slide image">
                        <div>
                            <form action="/scripts/goToProduct.php" method="POST">
                                <h3 readonly class="form-control-plaintext product-title text-dark fs-3"><?= $first_product["title"];?></h3>
                                <input type="hidden" readonly class="form-control-plaintext product-title text-dark fs-3" name="title" value="<?= $first_product["title"];?>" />
                                <button class="btn btn-primary go-to-product-btn">Go to product</button>
                            </form>
                        </div>
                    </div>
                  </div>
                    <?php foreach ($new_products as $product): ?>
                    <!-- Slider item -->
                  <div class="carousel-item">
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center hstack gap-4">
                        <img src="<?php echo $product["image_link"]; ?>" class="d-block slider-img" alt="Product slide image">
                        <div>
                            <form action="/scripts/goToProduct.php" method="POST">
                            <h3 readonly class="form-control-plaintext product-title text-dark fs-3"><?= $product["title"];?></h3>
                                <input type="hidden" readonly class="form-control-plaintext product-title text-dark fs-3" name="title" value="<?= $product["title"];?>" />
                                <button class="btn btn-primary go-to-product-btn">Go to product</button>
                            </form>
                        </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                  
                  
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                <div class="carousel-indicators position-relative mt-3">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    
                  </div>
              </div>
        </section>
    </main>
    <!-- Footer -->
    <?php include_once "common/footer.html" ?>
</body>
</html>