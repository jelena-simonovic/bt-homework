<?php

class Product
{
    private $barcode;
    private $title;
    private $price;

    public function getAllProducts()
    {
        $products = [
            [
                'barcode' => 5343541,
                'title' => "L'Interdit",
                'description' => "L'Interdit Eau de Parfum is an invitation to defy convention 
        and embrace individuality. The perfume's white floral bouquet is filled with 
        top notes of orange blossom combined with jasmine and tuberose.",
                'img' => 'public/theme/img/givenchy.jpg',
                'price' => '98.99',
                'category' => ['floral', 'for_her'],
                'brand' => 'Givenchy',
                'available' => false,
                'related' => 'some_value'
            ],
            [
                'barcode' => 534872,
                'title' => "Guilty Man",
                'description' => "The celebration of freedom expressed by the statement #ForeverGuilty
        continues with Gucci Guilty Pour Homme Eau de Parfum, a Woody
        Aromatic Spicy fragrance created to provoke.",
                'img' => 'public/theme/img/guilty.jpg',
                'price' => '145.99',
                'category' => ['woody', 'for_him'],
                'brand' => 'Gucci',
                'available' => false,
                'related' => 'some_value'
            ],
            [
                'barcode' => 8857523,
                'title' => "Laura Tender Donna",
                'description' => "The accord between the head notes, heart notes and base notes evokes 
        a world of young and delicate contemporary femininity, where freshness is considered a necessity.",
                'img' => 'public/theme/img/laura.jpg',
                'price' => '55.89',
                'category' => ['for_her', 'fresh'],
                'brand' => 'Laura Biagotti',
                'available' => true,
                'related' => 'some_value'
            ],
            [
                'barcode' => 72532754,
                'title' => "Woman",
                'description' => "A perfume where the delicate nature of Jasmine and the sensuality of 
        Mahonial are embraced by Wood notes resulting in a unique and sophisticated fragrance.",
                'img' => 'public/theme/img/missoni.jpg',
                'price' => '65.99',
                'category' => ['for_her', 'floral'],
                'brand' => 'MISSONI',
                'available' => false,
                'related' => 'some_other_value'
            ],
            [
                'barcode' => 7865875,
                'title' => "Dylan Blue Man",
                'description' => "A strong, masculine fragrance, Dylan Blue encapsulates the sensual scents
        of the Mediterranean. The fragrance bold ambrox notes, refreshed with hints of bergamot and 
        grapefruit.",
                'img' => 'public/theme/img/versace.jpg',
                'price' => '89.99',
                'category' => ['for_him', 'spicy'],
                'brand' => 'Versace',
                'available' => true,
                'related' => 'some_value'
            ],
            [
                'barcode' => 588566,
                'title' => "Woman",
                'description' => "Roberto Cavalli Just Cavalli Woman Eau De Toilette is a crisp, floral 
        oriental fragrance for women featuring the Tahitian Tiare flower. A modern, luminous and 
        sensual fragrance.",
                'img' => 'public/theme/img/cavalli.jpg',
                'price' => '77.79',
                'category' => ['spicy', 'for_her'],
                'brand' => 'Roberto Cavalli',
                'available' => true,
                'related' => 'some_other_value'
            ],
            [
                'barcode' => 75425580,
                'title' => "Lady Million Empire",
                'description' => "The sweet and fruity fragrance of Lady Million Empire is a chypre floral 
        scent for women that blends fruity, floral and earthy accords. Launched in 2019 by the 
        design house of Paco Rabanne, this fragrance opens with top notes of orange, red currant 
        and neroli.",
                'img' => 'public/theme/img/paco.jpg',
                'price' => '99.99',
                'category' => ['floral', 'for_her'],
                'brand' => 'Paco Rabanne',
                'available' => true,
                'related' => 'some_value'
            ],
            [
                'barcode' => 2454378,
                'title' => "Absulute",
                'description' => "Explore the rich intensity of BOSS The Scent Absolute for Him fragrance. 
        Spicy Ginger draws the senses into a potent accord of Maninka fruit and Mondia roots, 
        wrapped in elegant Vetiver for an absolutely addictive Eau de Parfum.",
                'img' => 'public/theme/img/hugo.jpg',
                'price' => '68.89',
                'category' => ['fruity', 'for_him'],
                'brand' => 'Hugo Boss',
                'available' => true,
                'related' => 'some_other_value'
            ],
            [
                'barcode' => 9245337,
                'title' => "Uomo The Red",
                'description' => "Fragrance of the aromatic fougere group for men. The new fragrance by 
        Trussardi Parfums is unequivocally masculine enveloping and persistent. A scent made to last 
        and to be remembered. ",
                'img' => 'public/theme/img/trussardi.jpg',
                'price' => '59.99',
                'category' => ['spicy', 'for_him'],
                'brand' => 'Trussardi',
                'available' => true,
                'related' => 'some_value'
            ],
            [
                'barcode' => 1575780,
                'title' => "Tresor La Nuit Woman",
                'description' => "Discover La Nuit Trésor, a sultry, smouldering perfume for women with notes
         of fresh raspberry, frankincense, and vanilla, with a bewitching heart of Black Rose essence.",
                'img' => 'public/theme/img/tresor.jpg',
                'price' => '78.99',
                'category' => ['floral', 'for_her'],
                'brand' => 'Lancome',
                'available' => false,
                'related' => 'some_value'
            ],
            [
                'barcode' => 11445245,
                'title' => "Matchpoint Man",
                'description' => "The green energy of basil and gentian bitterness combine in a breathtaking 
        freshness. The thrilling black vibration of woody vetiver brings strength and intensity. ",
                'img' => 'public/theme/img/lacoste.jpg',
                'price' => '56.89',
                'category' => ['fresh', 'for_him'],
                'brand' => 'Lacoste',
                'available' => true,
                'related' => 'some_other_value'
            ],
            [
                'barcode' => 1415222,
                'title' => "Her",
                'description' => "Burberry Her Eau de Parfum for women is an artful blend of berries
        elevated by spirited jasmine and violet and smoothed out with amber and musk. A multifaceted,
        magnetic fruity gourmand and the scent of freedom.",
                'img' => 'public/theme/img/burberry.jpg',
                'price' => '141.89',
                'category' => ['fruity', 'for_her'],
                'brand' => 'Burberry',
                'available' => true,
                'related' => 'some_value'
            ],
            [
                'barcode' => 125424533,
                'title' => "Florence Woman",
                'description' => " A luminous ode to the brand's roots in Tuscany. 
        A perfect combination of audacity, beauty, and sensuality. ",
                'img' => 'public/theme/img/florence.jpg',
                'price' => '128.99',
                'category' => ['floral', 'for_her'],
                'brand' => 'Roberto Cavalli',
                'available' => true,
                'related' => 'some_other_value'
            ],
            [
                'barcode' => 152574,
                'title' => "Aqua Allegoria",
                'description' => "Aqua Allegoria is a continuously renewed collection that pays homage
        to the wonders of nature and beautiful raw materials. Cheerful fragrances that represent
        happy moments.",
                'img' => 'public/theme/img/guerlain.jpg',
                'price' => '97.89',
                'category' => ['unisex', 'woody'],
                'brand' => 'Guerlain',
                'available' => true,
                'related' => 'some_other_value'
            ],
            [
                'barcode' => 15453535,
                'title' => "One",
                'description' => "CK One is a naturally clean, pure and contemporary fragrance with a
        liberating point of view. The top notes are bright and effervescent, a combination of 
        Bergamot, Cardamom, fresh Pineapple and Papaya. ",
                'img' => 'public/theme/img/ck.jpg',
                'price' => '55.89',
                'category' => ['unisex', 'fresh'],
                'brand' => 'Calvin Klein',
                'available' => true,
                'related' => 'some_other_value'
            ],
            [
                'barcode' => 14855276,
                'title' => "Oceane Di Seta",
                'description' => "Storie di seta is the new line of fragrances inspired by the imaginary
        worlds of Salvatore Ferragamo's silk creations. A refined collection of four universal and 
        fresh perfumes, each unique fragrance is bound by an exclusive mix.",
                'img' => 'public/theme/img/salvatore.jpg',
                'price' => '91.99',
                'category' => ['fresh', 'for_her'],
                'brand' => 'Salvatore Ferragamo',
                'available' => true,
                'related' => 'some_other_value'
            ]
        ];

        return $products;
    }
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }
    public function getBarcode()
    {
        return $this->barcode;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function addToCart(ShoppingCart $cartItem, $quantity)
    {
        return $cartItem->addToCart($this, $quantity);
    }
    public function removeFromCart(ShoppingCart $cartItem)
    {
        return $cartItem->removeItem($this);
    }
}
