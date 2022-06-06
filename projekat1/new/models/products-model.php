<?php

const ORDER_BY_PRICE_ASC ='price-asc';   
const ORDER_BY_PRICE_DESC ='price-desc'; 

function getAllProducts() {
    $products = [
        [
            'id' => 55,
            'title' => "Zvezda protiv Partizana",
            'description' => "Ovde je neki opis asdasnfoda gf Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs",
            'available' => true,
            'flag' => false,
            'price' => 3689,
            'category' => 1,
            'img' => "./public/theme/img/news123.png"
        ],
        [
            'id' => 124,
            'title' => "Liverpul&copyrights",
            'description' => "Ovde je neki opis Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs gf sjadkgs",
            'available' => true,
            'price' => 4561,
            'category' => 1,
            'img' => "./public/theme/img/news123.png"
        ],
        [
            'id' => 125,
            'title' => "Barselona",
            'description' => "Ovde je Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs opis asdasnfoda gf sjadkgs",
            'available' => false,
            'price' => 3500,
            'category' => 1,
            'img' => "./public/theme/img/news123.png"
        ],
        [
            'id' => 126,
            'title' => "Real Madrid",
            'description' => "Ovde je neki Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs asdasnfoda gf sjadkgs",
            'available' => true,
            'price' => 1588,
            'category' => 88,
            'img' => "./public/theme/img/news123.png"
        ],
        [
            'id' => 127,
            'title' => "Radnicki Pirot",
            'description' => "Ovde je neki opis asdasnfoda gf Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs",
            'available' => false,
            'price' => 9000,
            'category' => 1,
            'img' => "./public/theme/img/news123.png"
        ],
        [
            'id' => 128,
            'title' => "Dubocica",
            'description' => "Ovde je neki opis Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs gf sjadkgs",
            'available' => true,
            'price' => 1368,
            'category' => 1,
            'img' => "./public/theme/img/news123.png"
        ],
        [
            'id' => 129,
            'title' => "Metalac",
            'description' => "Ovde je neki opis asdasnfoda gf Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs",
            'available' => true,
            'price' => 1500,
            'category' => 4,
            'img' => "./public/theme/img/news123.png"
        ],
        [
            'id' => 130,
            'title' => "Kolubara",
            'description' => "Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs",
            'available' => false,
            'price' => 368,
            'category' => 1,
            'img' => "./public/theme/img/news123.png"
        ],
        [
            'id' => 131,
            'title' => "Kolubara",
            'description' => "Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs",
            'available' => true,
            'price' => 400,
            'category' => 1,
            'img' => "./public/theme/img/news123.png"
        ],
        [
            'id' => 132,
            'title' => "Bla blsssssssa",
            'description' => "Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs",
            'available' => false,
            'price' => 500,
            'category' => 1,
            'img' => "./public/theme/img/news123.png"
        ],
        [
            'id' => 133,
            'title' => "Vest 133",
            'description' => "Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgsOvde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs Ovde je neki opis asdasnfoda gf sjadkgs",
            'available' => true,
            'price' => 368,
            'category' => 1,
            'img' => "./public/theme/img/news123.png"
        ]
    ];

    return $products;
}

function getAvailableProducts() {
    $allProducts = getAllProducts();
    $availabaleProducts = [];
    foreach ($allProducts as $product) {
        if($product['available'] == true) {
            $availabaleProducts[] = $product;
        }
    }
    return $availabaleProducts;
}

function filteredProducts($products, $term) {
    $filteredProducts = [];
    foreach ($products as $product) {
        if(str_contains($product['title'], $term)) {
            $filteredProducts[] = $product;
        }
    }
    return $filteredProducts;
}

function getOneProductById($id) {
    $products = getAvailableProducts();
    foreach ($products as $product) {
        if($product['id'] == $id) {
            return $product;
        }
    }
}

function getRelatedProducs($mainProduct) {
    $related = [];
    $products = getAvailableProducts();
    foreach ($products as  $product) {
        if($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
            $related[] = $product;
            if(count($related) >= 3) {
                break;
            }
        }
    }
    return $related;
}


function sortProductBy($products, $sortBy) {
    switch ($sortBy) {
        case ORDER_BY_PRICE_ASC:
            usort($products, function ($item1, $item2) {
                return $item1['price'] <=> $item2['price'];
            });
            break;
        case ORDER_BY_PRICE_DESC:
            array_multisort(array_column($products, 'price'), SORT_DESC, $products);
            break;
        default:
            break;
    }
    return $products;
}

function getPrevProductId($productId) {
    $products = getAvailableProducts();
    foreach ($products as $key => $product) {
        if($product['id'] == $productId) {
            if($key == 0) {
                return $products[count($products) - 1]['id'];
            } else {
                return $products[$key-1]['id'];
            }
        }
    }
}

function getNextProductId($productId) {
    $products = getAvailableProducts();
    foreach ($products as $key => $product) {
        if($product['id'] == $productId) {
            if($key == (count($products) -1)) {
                return $products[0]['id'];
            } else {
                return $products[$key+1]['id'];
            }
        }
    }
}