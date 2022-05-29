<?php
require_once __DIR__ . "/models/m-products.php";

$productId = 11;

if (!empty($_GET['stranica'])) {
   $productId = $_GET['stranica'];
}

$product = getOneProductById($productId);
$relatedProducts = getRelatedProducs($product);
$nextProduct = getNextProduct($productId);
$previousProduct = getPreviousProduct($productId);

// HEADER
require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-single-product.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";


/*
 Na single product je potrebnoda postoji navigacija <- prev, | back i -> next koriste se funkcije 
 getNextProduct i getPrevProduct i link za products-page.php. Navigaciju 
 kao i ostale parametre smestiti proizvoljno u desnom delu pored slike
  zajedno sa svim primerno navedenim osobinama. Kao i button BUY koji vodi 
  na checkout-page.php preko post-a i da se posalje quantity. Ispod slike i
   info dela ispisati description. 

 */