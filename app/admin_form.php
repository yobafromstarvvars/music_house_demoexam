<?php
    // require dirname(__DIR__)."/scripts/checkAdmin.php";
    // $tables = require dirname(__DIR__)."/scripts/get_all_tables.php";

    // Access denied if table is not specified
    require_once "../config/urls.php";
    if (empty($_GET["table"])) {
        header("Location: " . URL_ADMIN);
    } 

    // Import database
    require dirname(__DIR__)."/scripts/db.php";
    $db = new db(dbname:"musichouse");

    $columns = array();
    $table_name = $_GET["table"];
    // Get fields from a table
    $sql = "SHOW COLUMNS FROM {$table_name}";
    $columns = $db->query($sql)->fetchAll();
    // Get records from the table
    $sql = "SELECT * FROM {$table_name}";
    $records = $db->query($sql)->fetchAll();
    // // Save table info
    // $tables[$table_name] = $records;
    // $columns[$table_name] = $table_columns;



    // Get fields from a table
    // $sql = "SHOW COLUMNS FROM category";
    // $accounts = $db->query($sql)->fetchAll();

    // // Get records from a table
    // $sql = "SELECT * FROM user";
    // $records = $db->query($sql)->fetchAll();


    // print_r($records);
    // print_r($columns);
    // echo "<br>"."exiting program...";
    // exit;
?>

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

                <textarea name="form_textarea" id="1" cols="30" rows="10"></textarea>
                <?php
                    

                    

                    $email_input = '
                    <div class="form-floating">
                        <input required type="login" class="form-control" name="login" id="login" placeholder="login">
                        <label for="login">Login</label>
                        <div class="invalid-feedback">Incorrect input</div>
                    </div>';

                    $select_input = '
                    <div class="form-floating">
                        <input required type="login" class="form-control" name="login" id="login" placeholder="login">
                        <label for="login">Login</label>
                        <div class="invalid-feedback">Incorrect input</div>
                    </div>';

                    $checkbox_input = '
                    <div class="form-floating">
                        <input required type="login" class="form-control" name="login" id="login" placeholder="login">
                        <label for="login">Login</label>
                        <div class="invalid-feedback">Incorrect input</div>
                    </div>';

                    

                    $file_input = '
                    <div class="form-floating">
                        <input required type="login" class="form-control" name="login" id="login" placeholder="login">
                        <label for="login">Login</label>
                        <div class="invalid-feedback">Incorrect input</div>
                    </div>';

                    $date_input;
                    print_r($columns);
                    for ($col=0; $col < count($columns); $col++) { 
                        $input_name = strtolower($columns[$col]['Field']);
                        if ($input_name == 'id') continue;
                        
                        // Identify the column type
                        switch (explode("(", $columns[$col]['Type'], 2)[0]) {
                            case 'int':
                            case 'float':
                                echo
                                "<div class='form-floating'>
                                    <input required min='0' type='number' class='form-control' name='{$input_name}' id='{$input_name}' placeholder='{$input_name}'>
                                    <label for='login'>{$input_name}</label>
                                    <div class='invalid-feedback'>Incorrect input</div>
                                </div>";
                                break;
                            
                            case 'varchar':
                                // If the input is image, show file selection
                                if ($input_name == 'image_link'){
                                    echo
                                    "<form action='".URL_ROOT."scripts/upload_image.php' method='post' enctype='multipart/form-data'>
                                        Update picture: <input type='file' id='filename' name='filename' size='10'>
                                        <input style='color:black;' type='submit' value='Upload'>
                                        <input type='hidden' name='action' value='create'>
                                    </form>";
                                    // if ($is_invalid_ext) {
                                    //     <p>Invalid extension. Acceptable: png, jpg/jpeg</p>
                                    // } 
                                    // elseif ($is_success_upload) {
                                    //     <p>Successful upload. Refresh the page to see results</p>
                                    // }
               
                                }
                                elseif ($input_name == 'password_hash') {
                                    echo
                                    '<div class="form-floating">
                                        <input required type="password" class="form-control" name="password" id="password" placeholder="password">
                                        <label for="password">Password</label>
                                        <div class="invalid-feedback">Incorrect input</div>
                                    </div>';
                                    
                                }
                                else {
                                    echo
                                    "<div class='form-floating'>
                                        <input required type='text' class='form-control' name='{$input_name}' id='{$input_name}' placeholder='{$input_name}'>
                                        <label for='{$input_name}'>".ucfirst($input_name)."</label>
                                        <div class='invalid-feedback'>Incorrect input</div>
                                    </div>";
                                }
                                
                                break;

                            case 'timestamp':
                                echo
                                '<div class="form-floating">
                                    <input required type="login" class="form-control" name="login" id="login" placeholder="login">
                                    <label for="login">Login</label>
                                    <div class="invalid-feedback">Incorrect input</div>
                                </div>';
                                break;
                            
                            default:
                                break;
                        }
                    }
                ?>

                <form method="post" action="/scripts/login.php" class="vstack gap-3 needs-validation" novalidate>    
                    

                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>
                
               
            </div>
        </section>


    </main>
    <!-- Footer -->
    <?php include_once "../common/footer.html" ?>
</body>
</html>

