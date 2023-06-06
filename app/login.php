<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <script defer src="../assets/js/bootstrap.bundle.js"></script>
    <script defer src="../assets/js/validateForm.js"></script>
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Log in</title>
</head>
<body class="min-vh-100 d-flex flex-column">
    <header>
        <!-- Navbar -->
        <?php include_once "../common/navbar.php" ?>
    </header>
    <main class="flex-grow-1">
        <div class="container px-0 px-lg-5 py-5">
            <div class="card mx-0 mx-lg-5">
                <div class="card-body">
                    <div class="card-text">
                        <h1 class="text-center py-3">Log in</h1>
                        <form method="post" action="/scripts/login.php" class="vstack gap-3 needs-validation" novalidate>
                            
                            <div class="form-floating">
                                <input required type="login" class="form-control" name="login" id="login" placeholder="login">
                                <label for="login">Login</label>
                                <div class="invalid-feedback">Incorrect input</div>
                            </div>

                            
                            <div class="form-floating">
                                <input required type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                                <div class="invalid-feedback">Incorrect input</div>
                            </div>
                                
                            

                            <button type="submit" class="btn btn-primary">Log in</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php include_once "../common/footer.html" ?>
</body>
</html>