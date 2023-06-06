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
        <section class="py-5">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center hstack gap-5">
                    <div>
                        <h1 class="text-center">Contacts</h1>
                        <div class="list-group list-group-flush">
                            <li class="list-group-item"><span class="fw-bold">Address: </span>Lorem ipsum dolor sit amet.</li>
                            <li class="list-group-item"><span class="fw-bold">Phone: </span>+7 979 979 97 97</li>
                            <li class="list-group-item"><span class="fw-bold">Email: </span>contacts@musichouse.com</li>
                        </div>
                    </div>
                    <img class="w-50 img-thumbnail contacts-map object-fit-cover" src="/assets/img/map.jpg" alt="map">
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php include_once "../common/footer.html" ?>
</body>
</html>