<?php
require_once __DIR__ . "/models/products-model.php";
$products = getAvailableProducts();

$term = "";
$sort = "";

if(!empty($_GET['term'])) {
    $term = $_GET['term'];
}

if(!empty($_GET['sort'])) {
    $sort = $_GET['sort'];
}

if($term != "") {
    $products = filteredProducts($products, $term);
}

if($sort != "") {
    $products = sortProductBy($products, $sort);
}

require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-products.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";