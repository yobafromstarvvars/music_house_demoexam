<?php

session_start();
$_SESSION["product"] = require __DIR__."/getProduct.php";
header("Location: /app/product.php");
exit;