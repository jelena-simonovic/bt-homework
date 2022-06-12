<?php

include_once 'Product.php';

class ShoppingCart extends Product
{
    private $cartItems = [];

    public function setCartItems($cartItems)
    {
        $this->cartItems = $cartItems;
    }
    public function getCartItems()
    {
        return $this->cartItems;
    }
    public function addToCart(Product $product, $quantity = 1)
    {
        $cartItem = $this->findCartItem($product->getBarcode());
        if ($cartItem === null) {
            $cartItem = new ShoppingCartItem($product, 0);
            $this->cartItems[$product->getBarcode()] = $cartItem;
        }
        $cartItem->increaseQuantity($quantity);
        return $cartItem;
    }
    private function findCartItem(int $productId)
    {
        return $this->cartItems[$productId] ?? null;
    }
    public function listAllAddedItems()
    {
    }
    public function removeItem(Product $product)
    {
        unset($this->cartItems[$product->getBarcode()]);
    }
}
