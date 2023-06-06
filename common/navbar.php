<?php 

session_start(); 

?>
<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/index.php">
            <img src="../assets/img/logo.png" alt="Logo" height="40" class="d-inline-block">
            MUSIC HOUSE
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/app/catalog.php">Catalog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/index.php">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/app/contacts.php">Contacts</a>
            </li>
            
            
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <?php if (isset($_SESSION["user_id"])): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hello, 
                    <?= $_SESSION["user_name"]; ?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/app/profile.php">Order history</a></li>
                    <?php 
                        if(isset($_SESSION["is_admin"])) {
                            if ($_SESSION["is_admin"] == True) {
                                $is_admin = 1;
                            } else {
                                $is_admin = 0;
                            }
                        }
                    ?>
                    <li><a class="dropdown-item <?php if(! $is_admin) echo "disabled";?>" href="/app/admin.php">Admin panel</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/scripts/logout.php"><span class="text-danger">Sign out</span></a></li>
                </ul>
            </li>
            <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="/app/signup.php">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/app/login.php">Log in</a>
            </li>
            <?php endif; ?>
        </ul>
        </div>
    </div>
</nav>