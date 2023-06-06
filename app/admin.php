<?php 
    // require dirname(__DIR__)."/scripts/checkAdmin.php";
    // $tables = require dirname(__DIR__)."/scripts/get_all_tables.php";

    require dirname(__DIR__)."/scripts/db.php";
    $db = new db(dbname:"musichouse");

    // Get a list of tables in the database
    $sql = "SHOW TABLES";
    $res = $db->query($sql)->fetchAll();
    $tables = array();
    $columns = array();
    // Get info about all tables
    foreach ($res as $key => $value){
        $table_name = array_values($value)[0];
        // Get fields from a table
        $sql = "SHOW COLUMNS FROM {$table_name}";
        $table_columns = $db->query($sql)->fetchAll();
        // Get records from the table
        $sql = "SELECT * FROM {$table_name}";
        $records = $db->query($sql)->fetchAll();
        // Save table info
        $tables[$table_name] = $records;
        $columns[$table_name] = $table_columns;
    }

    // Get fields from a table
    // $sql = "SHOW COLUMNS FROM category";
    // $accounts = $db->query($sql)->fetchAll();

    // // Get records from a table
    // $sql = "SELECT * FROM user";
    // $records = $db->query($sql)->fetchAll();


    // print_r($columns);
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
                
                <?php 
                    // Display all tables from the database
                    foreach ($tables as $table => $records): 
                ?>
                <!-- table -->
                <div class="table-responsive">
                    <form method="GET" action="admin_form.php">
                        <h4><?=$table?></h4>
                        <input type="hidden" name="table" value="<?=$table?>">
                        <button class="btn btn-outline-success">Add</button>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <?php 
                                    // Display column names
                                    for ($col=0; $col < count($columns[$table]); $col++) { 
                                        $col_name = $columns[$table][$col]['Field'];
                                        echo "<th scope='row'>{$col_name}</th>";
                                    }  
                                ?>
                                    
                            </tr>
                        </thead>
                        <!-- Records -->
                        <tbody>
                            <?php
                                // Print all records
                                if (count($records) == 0) {
                                    echo "<p class='fs-5 text-secondary pt-0 mt-0'>Table is empty</p>";
                                } else 
                                    foreach ($records as $record => $fields): 
                            ?>
                                <tr>
                                    <?php
                                        // Print all record columns
                                        $is_col_id = True;
                                        foreach ($fields as $field) {
                                            if ($is_col_id) {
                                                echo "<th scope='row' class='w-5'>{$field}</th>";
                                            } 
                                            else {
                                                echo "<td>{$field}</td>";
                                            }
                                            $is_col_id = False;
                                        }
                                    ?>
                                </tr>
                            <?php 
                                // End records
                                endforeach; 
                            ?>
                
                        </tbody>
                    </table>
                </div>
                <?php 
                    // End table
                    endforeach; 
                ?>
            </div>
        </section>


    </main>
    <!-- Footer -->
    <?php include_once "../common/footer.html" ?>
</body>
</html>