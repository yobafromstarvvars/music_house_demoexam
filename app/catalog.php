<?php 
$products = require dirname(__DIR__)."/scripts/getAllProducts.php";
//arsort($products);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <script defer src="../assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Catalog</title>
</head>
<body class="min-vh-100 d-flex flex-column">
    <header>
        <!-- Navbar -->
        <?php include_once "../common/navbar.php" ?>
    </header>
    <main class="flex-grow-1">
        <!-- Search options -->
        <section class="text-bg-dark py-5">
            <div class="container">
                <form action="" class="hstack gap-3 d-flex align-items-end">
                    <div class="w-100">
                        <label class="form-label" for="sort">Sort by</label>
                        <select id="sort" class="form-select" aria-label="Default select example">
                            <option value="1" selected>Title</option>
                            <option value="2">Year</option>
                            <option value="3">Cost</option>
                        </select>
                    </div>
                    <div class="w-100">
                        <label class="form-label" for="sort">Category</label>
                        <select id="sort" class="form-select" aria-label="Default select example">
                            <option value="1" selected>Strings</option>
                            <option value="2">Keys</option>
                            <option value="3">Bowed</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Apply</button>
                </form>
            </div>
        </section>

        <!-- Products grid -->
        <section class="py-5">
            <div class="container">
                <div class="row g-2 justify-content-center">
                    <?php $product_card_id = 0; ?>
                    <?php foreach($products as $product): ?>
                    <?php $product_card_id = $product_card_id + 1; ?>
                    <!-- Product card -->
                    
                    <div class="col-auto">
                        <!-- Modal -->
                        <form action="/scripts/goToProduct.php" method="post">
                        <div class="modal fade" id="exampleModal<?= $product_card_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title fs-5 text-secondary" id="exampleModalLabel<?= $product_card_id ?>"><em><small>Quick preview</small></em></p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <div class="modal-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                        <h5 class="card-title"><?= $product["title"] ?></h5>
                                        <input type="hidden" name="title" value="<?= $product["title"] ?>">

                                            <h4><?= $product["title"] ?></h4>

                                            <p class="lead"><span class="text-danger"><?= $product["price"] ?> rub.</span></p>
                                        </div>
                                        <img src="<?= $product["image_link"] ?>" class="product-quick-preview img-thumbnail" alt="Product quick preview">
                                    </div>
                                    <ul class="list-group-flush list-group">
                                        <li class="list-group-item"><span class="fw-bold">Country: </span><?= $product["country"] ?></li>
                                        <li class="list-group-item"><span class="fw-bold">Year: </span><?= $product["year"] ?></li>
                                        <li class="list-group-item"><span class="fw-bold">Model: </span><?= $product["model"] ?></li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                
                                <a href="/app/cart.php" class="btn btn-outline-success">Add to card</a>
                                 <button type="button" class="btn btn-primary go-to-product-btn">Go to product</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                        <!-- Modal ends -->



                        <form action="/scripts/goToProduct.php" method="post">
                        <div class="card" style="width: 18rem;">
                            <div class="card-img-top text-center border-bottom border-secondary-subtle position-relative">
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal<?= $product_card_id ?>" type="button" class="product-card-overlay d-flex justify-content-center align-items-center position-absolute h-100 w-100 text-light fs-3 rounded-top ">Quick review</button>
                                <img src="<?= $product["image_link"] ?>" class=" p-2 product-card-img object-fit-contain" alt="Product image">
                            </div>
                            <div class="card-body">
                              <h5 class="card-title"><?= $product["title"] ?></h5>
                              <input type="hidden" name="title" value="<?= $product["title"] ?>">
                              <p class="card-text fs-6"><?= $product["price"] ?> rub.</p>

                                    <button href="/app/product.php" class="go-to-product-btn btn btn-primary">Go to product</button>
                                    <a href="/app/cart.php" class="btn btn-outline-success">Add to card</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php include_once "../common/footer.html" ?>
</body>
</html>