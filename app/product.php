<?php

session_start();


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
    <title>Contacts</title>
</head>
<body class="min-vh-100 d-flex flex-column">
    <header>
        <!-- Navbar -->
        <?php include_once "../common/navbar.php" ?>
    </header>
    <main class="flex-grow-1">
        <div class="container py-5">
            <div class="hstack gap-5 align-items-center justify-content-center">
                <img src="<?= $_SESSION["product"]["image_link"]; ?>" alt="Product image" class="img-thumbnail">
                <div>
                    <h3><?= $_SESSION["product"]["title"] ?></h3>
                    <p class="lead fw-bold text-danger"><?= $_SESSION["product"]["price"] ?> rub.</p>
                    <h4 class="pt-3">Description:</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="fw-bold">Country: </span><?= $_SESSION["product"]["country"] ?>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Year: </span><?= $_SESSION["product"]["year"] ?>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Model: </span><?= $_SESSION["product"]["model"] ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php include_once "../common/footer.html" ?>
</body>
</html>