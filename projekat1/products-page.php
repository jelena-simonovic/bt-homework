<?php

require_once __DIR__ . "/models/m-products.php";

$products = getAvailableProducts();

$searchTerm = "";

if (!empty($_GET['filter'])) {
   $searchTerm = strtolower($_GET['filter']);
}

if ($searchTerm != "") {
   $products = filteredProducts($products, $searchTerm);
}

$sort = "";

if (!empty($_GET['sort-by'])) {
   $sort = $_GET['sort-by'];
}

if ($sort != "") {
   $products = sortProducts($products, $sort);
}


$category = "";

if (!empty($_GET['category'])) {
   $category = $_GET['category'];
}

if ($category != "") {
   $products = filteredByCategory($products, $category);
}

$fam = "";

if (!empty($_GET['scent_family'])) {
   $fam = $_GET['scent_family'];
}

if ($fam != "") {
   $products = filteredByFAmily($products, $fam);
}


// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-products.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
