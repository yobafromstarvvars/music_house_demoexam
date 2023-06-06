<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <script defer src="../assets/js/bootstrap.bundle.js"></script>
    <!-- <script defer src="../assets/js/validateForm.js"></script> -->
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Sign in</title>
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
                        <h1 class="text-center py-3">Sign in</h1>
                        <form method="post" action="/scripts/signup-process.php" class="vstack gap-3 needs-validation" novalidate>
                            <div class="form-floating">
                                <input required type="text" class="form-control" name="name" id="name" placeholder="Name">
                                <label for="text">Name</label>
                                <div class="invalid-feedback">Incorrect input</div>
                            </div>
                            

                            <div class="form-floating">
                                <input required type="surname" class="form-control" name="surname" id="surname" placeholder="Surname">
                                <label for="surname">Surname</label>
                                <div class="invalid-feedback">Incorrect input</div>
                            </div>

                            <div class="form-floating">
                                <input required type="patronymic" class="form-control" name="patronymic" id="patronymic" placeholder="patronymic">
                                <label for="patronymic">Patronymic</label>
                                <div class="invalid-feedback">Incorrect input</div>
                            </div>

                            <div class="form-floating">
                                <input required type="login" class="form-control" name="login" id="login" placeholder="login">
                                <label for="login">Login</label>
                                <div class="invalid-feedback">Incorrect input</div>
                            </div>

                            <div>
                                <div class="form-floating">
                                    <input required type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                    <div class="invalid-feedback">Incorrect input</div>
                                </div>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>

                            <div class="form-floating">
                                <input required type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                                <div class="invalid-feedback">Incorrect input</div>
                            </div>
                                
                            <div class="form-floating">
                                <input required type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="Repeat password">
                                <label for="password_confirm">Repeat password</label>
                                <div class="invalid-feedback">Incorrect input</div>
                            </div>

                            <div class="mb-3 form-check">
                              <input required type="checkbox" class="form-check-input" name="agree" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">I agree to the company's terms or use and privacy policy</label>
                              <div class="invalid-feedback">This field is required</div>
                            </div>

                            <button type="submit" class="btn btn-primary">Sign in</button>
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