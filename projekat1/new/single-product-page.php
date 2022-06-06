<?php
require_once __DIR__ . "/models/products-model.php";

$productId = null;

if(!empty($_GET['stranica'])) {
    $productId = $_GET['stranica'];
    $product = getOneProductById($productId);
    $relatedProducts = getRelatedProducs($product);
}



// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
if($productId) {
    require __DIR__ . "/views/v-single-product.php";
} else {
    require __DIR__ . "/views/v-page-not-found.php";
}

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";