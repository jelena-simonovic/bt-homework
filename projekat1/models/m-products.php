<?php


$ORDER_BY_PRICE_ASC = 'price-asc';
$ORDER_BY_PRICE_DESC = 'price-desc';

function getAllProducts()
{
    $products = [
        [
            'id' => 1,
            'title' => "L'Interdit",
            'description' => "L'Interdit Eau de Parfum is an invitation to defy convention 
        and embrace individuality. The perfume's white floral bouquet is filled with 
        top notes of orange blossom combined with jasmine and tuberose.",
            'img' => 'public/theme/img/givenchy.jpg',
            'price' => '98.99',
            'category' => 'perfume',
            'brand' => 'Givenchy',
            'available' => false
        ],
        [
            'id' => 2,
            'title' => "Guilty Man",
            'description' => "The celebration of freedom expressed by the statement #ForeverGuilty
        continues with Gucci Guilty Pour Homme Eau de Parfum, a Woody
        Aromatic Spicy fragrance created to provoke.",
            'img' => 'public/theme/img/guilty.jpg',
            'price' => '145.99',
            'category' => 'perfume',
            'brand' => 'Gucci',
            'available' => false
        ],
        [
            'id' => 3,
            'title' => "Laura Tender Donna",
            'description' => "The accord between the head notes, heart notes and base notes evokes 
        a world of young and delicate contemporary femininity, where freshness is considered a necessity.",
            'img' => 'public/theme/img/laura.jpg',
            'price' => '55.89',
            'category' => 'eau de toilette',
            'brand' => 'Laura Biagotti',
            'available' => true
        ],
        [
            'id' => 4,
            'title' => "Woman",
            'description' => "A perfume where the delicate nature of Jasmine and the sensuality of 
        Mahonial are embraced by Wood notes resulting in a unique and sophisticated fragrance.",
            'img' => 'public/theme/img/missoni.jpg',
            'price' => '65.99',
            'category' => 'perfume',
            'brand' => 'MISSONI',
            'available' => false
        ],
        [
            'id' => 5,
            'title' => "Dylan Blue Man",
            'description' => "A strong, masculine fragrance, Dylan Blue encapsulates the sensual scents
        of the Mediterranean. The fragrance bold ambrox notes, refreshed with hints of bergamot and 
        grapefruit.",
            'img' => 'public/theme/img/versace.jpg',
            'price' => '89.99',
            'category' => 'eau de toilette',
            'brand' => 'Versace',
            'available' => true
        ],
        [
            'id' => 6,
            'title' => "Woman",
            'description' => "Roberto Cavalli Just Cavalli Woman Eau De Toilette is a crisp, floral 
        oriental fragrance for women featuring the Tahitian Tiare flower. A modern, luminous and 
        sensual fragrance.",
            'img' => 'public/theme/img/cavalli.jpg',
            'price' => '77.79',
            'category' => 'eau de perfume',
            'brand' => 'Roberto Cavalli',
            'available' => true
        ],
        [
            'id' => 7,
            'title' => "Lady Million Empire Woman",
            'description' => "The sweet and fruity fragrance of Lady Million Empire is a chypre floral 
        scent for women that blends fruity, floral and earthy accords. Launched in 2019 by the 
        design house of Paco Rabanne, this fragrance opens with top notes of orange, red currant 
        and neroli.",
            'img' => 'public/theme/img/paco.jpg',
            'price' => '99.99',
            'category' => 'perfume',
            'brand' => 'Paco Rabanne',
            'available' => true
        ],
        [
            'id' => 8,
            'title' => "Boss The Scent Absulute For Him",
            'description' => "Explore the rich intensity of BOSS The Scent Absolute for Him fragrance. 
        Spicy Ginger draws the senses into a potent accord of Maninka fruit and Mondia roots, 
        wrapped in elegant Vetiver for an absolutely addictive Eau de Parfum.",
            'img' => 'public/theme/img/hugo.jpg',
            'price' => '68.89',
            'category' => 'eau de toilette',
            'brand' => 'Hugo Boss',
            'available' => true
        ],
        [
            'id' => 9,
            'title' => "Uomo The Red",
            'description' => "Fragrance of the aromatic fougere group for men. The new fragrance by 
        Trussardi Parfums is unequivocally masculine enveloping and persistent. A scent made to last 
        and to be remembered. ",
            'img' => 'public/theme/img/trussardi.jpg',
            'price' => '59.99',
            'category' => 'eau de perfume',
            'brand' => 'Trussardi',
            'available' => true
        ],
        [
            'id' => 10,
            'title' => "Tresor La Nuit Woman",
            'description' => "Discover La Nuit Trésor, a sultry, smouldering perfume for women with notes
         of fresh raspberry, frankincense, and vanilla, with a bewitching heart of Black Rose essence.",
            'img' => 'public/theme/img/tresor.jpg',
            'price' => '78.99',
            'category' => 'floral', 'eau de toilette',
            'brand' => 'Lancome',
            'available' => false
        ],
        [
            'id' => 11,
            'title' => "Matchpoint Man",
            'description' => "The green energy of basil and gentian bitterness combine in a breathtaking 
        freshness. The thrilling black vibration of woody vetiver brings strength and intensity. ",
            'img' => 'public/theme/img/lacoste.jpg',
            'price' => '56.89',
            'category' => 'eau de toilette',
            'brand' => 'Lacoste',
            'available' => true
        ],
        [
            'id' => 12,
            'title' => "Her",
            'description' => "Burberry Her Eau de Parfum for women is an artful blend of berries
        elevated by spirited jasmine and violet and smoothed out with amber and musk. A multifaceted,
        magnetic fruity gourmand and the scent of freedom.",
            'img' => 'public/theme/img/burberry.jpg',
            'price' => '141.89',
            'category' => 'eau de perfume',
            'brand' => 'Burberry',
            'available' => true
        ],
        [
            'id' => 13,
            'title' => "Florence Woman",
            'description' => " A luminous ode to the brand's roots in Tuscany. 
        A perfect combination of audacity, beauty, and sensuality. ",
            'img' => 'public/theme/img/florence.jpg',
            'price' => '128.99',
            'category' => 'eau de toilette',
            'brand' => 'Roberto Cavalli',
            'available' => true
        ],
        [
            'id' => 14,
            'title' => "Aqua Allegoria",
            'description' => "Aqua Allegoria is a continuously renewed collection that pays homage
        to the wonders of nature and beautiful raw materials. Cheerful fragrances that represent
        happy moments.",
            'img' => 'public/theme/img/guerlain.jpg',
            'price' => '97.89',
            'category' => 'perfume',
            'brand' => 'Guerlain',
            'available' => true
        ],
        [
            'id' => 15,
            'title' => "One",
            'description' => "CK One is a naturally clean, pure and contemporary fragrance with a
        liberating point of view. The top notes are bright and effervescent, a combination of 
        Bergamot, Cardamom, fresh Pineapple and Papaya. ",
            'img' => 'public/theme/img/ck.jpg',
            'price' => '55.89',
            'category' => 'eau de perfume',
            'brand' => 'Calvin Klein',
            'available' => true
        ],
        [
            'id' => 16,
            'title' => "Oceane Di Seta",
            'description' => "Storie di seta is the new line of fragrances inspired by the imaginary
        worlds of Salvatore Ferragamo's silk creations. A refined collection of four universal and 
        fresh perfumes, each unique fragrance is bound by an exclusive mix.",
            'img' => 'public/theme/img/salvatore.jpg',
            'price' => '91.99',
            'category' => 'perfume',
            'brand' => 'Salvatore Ferragamo',
            'available' => true
        ]
    ];

    return $products;
}

function getAvailableProducts()
{
    $allProducts = getAllProducts();
    $availabaleProducts = [];
    foreach ($allProducts as $product) {
        if ($product['available']) {
            $availabaleProducts[] = $product;
        }
    }
    return $availabaleProducts;
}

function filteredProducts($products, $searchTerm)
{
    $filteredProducts = [];
    foreach ($products as $product) {
        if (
            str_contains(strtolower($product['title']), $searchTerm)
            || str_contains(strtolower($product['description']), $searchTerm)
            || str_contains(strtolower($product['brand']), $searchTerm)
        ) {
            $filteredProducts[] = $product;
        }
    }

    return $filteredProducts;
}

function getOneProductById($id)
{
    $products = getAvailableProducts();
    foreach ($products as $product) {
        if ($product['id'] == $id) {
            return $product;
        }
    }
}

function sortAscending()
{
    $products = getAvailableProducts();
    foreach ($products as $key => $value) {
        $price[$key] = $value['price'];
    }
    return array_multisort($price, SORT_ASC, $products);
}

function sortDescending()
{
    $products = getAvailableProducts();
    foreach ($products as $key => $value) {
        $price[$key] = $value['price'];
    }
    return array_multisort($price, SORT_DESC, $products);
}

function getNextProduct($id)
{
    $products = getAvailableProducts();
    foreach ($products as $product) {
        if ($product['id'] == $id) {
            return $product;
        }
    }
}

function getPreviousProduct($id)
{
    $products = getAvailableProducts();
    foreach ($products as $product) {
        if ($product['id'] == $id) {
            return $product;
        }
    }
}

function getRelatedProducs($mainProduct)
{
    $relatedProducts = [];
    $products = getAvailableProducts();
    foreach ($products as  $product) {
        if ($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
            $relatedProducts[] = $product;
            if (count($relatedProducts) >= 3) {
                break;
            }
        }
    }
    return $relatedProducts;
}
