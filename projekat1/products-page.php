<?php

require_once __DIR__ . "/models/m-products.php";

if (!empty($_GET['filter'])) {
   $allProducts = getAvailableProducts();
   $searchTerm = strtolower($_GET['filter']);
   $products = filteredProducts($allProducts, $searchTerm);
} else {
   $products = getAvailableProducts();
}

if (!empty($_GET['sort-by']) && ($_GET['sort-by'] == $ORDER_BY_PRICE_ASC)) {
   return sortAscending();
} else if (!empty($_GET['sort-by']) && ($_GET['sort-by'] == $ORDER_BY_PRICE_DESC)) {
   return sortDescending();
} else {
   $products = getAvailableProducts();
}


// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-products.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
