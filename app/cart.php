<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <script defer src="../assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Cart</title>
</head>
<body class="min-vh-100 d-flex flex-column">
    <header>
        <!-- Navbar -->
        <?php include_once "../common/navbar.php" ?>
    </header>
    <main class="flex-grow-1">
        <div class="container py-5">
            <div class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="hstack justify-content-between flex-column flex-lg-row">
                        <div class="text-center text-lg-start hstack gap-4 flex-column flex-lg-row">
                            <img class="img-thumbnail product-cart-img" src="/assets/img/61e3012c9fbb2126150a65217989ac40.jpeg" alt="Product image">
                            <a href="/app/product.php" class="fs-4 text-center text-lg-start text-decoration-none text-dark">Product name</a>
                        </div>
                        <div class="text-center text-lg-start d-flex d-lg-none flex-column flex-lg-row d-flex hstack  justify-content-center align-items-center">
                            <p class="me-5 fs-4 text-center text-lg-start">5000 rub.</p>
                            <input class="form-control w-50" type="number" name="quantity" id="quantity">
                            <button class="btn btn-outline-danger mt-3">Remove</button>
                        </div>
                        <div class="d-none w-50 d-lg-flex flex-column flex-lg-row d-flex hstack gap-5  justify-content-end align-items-center">
                            <p class="me-5 fs-5">5000 rub.</p>
                            <input class="form-control w-auto" type="number" name="quantity" id="quantity">
                            <button class="btn btn-outline-danger">Remove</button>
                        </div>
                    </div>
                </li>
                
            </div>
            <div class="border-top border-dark py-2 my-4">
                <p class="fs-3">Total:</p> 
                <button class="btn btn-primary">Checkout</button>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php include_once "../common/footer.html" ?>
</body>
</html>