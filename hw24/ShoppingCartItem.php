<?php

include_once 'ShoppingCart.php';
include_once 'Product.php';

class ShoppingCartItem extends ShoppingCart
{
    private Product $product;
    private $quantity;

    public function setValue($product)
    {
        $this->product = $product;
    }
    public function getValue()
    {
        return $this->product;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function increaseQuantity($amount = 1)
    {
        if ($this->getQuantity() + $amount > $this->getCartItems()->getAvailableQuantity()) {
            throw new Exception("Product quantity can not be more than " . $this->getCartItems()->getAvailableQuantity());
        }
        $this->quantity += $amount;
    }

    public function decreaseQuantity($amount = 1)
    {
        if ($this->getQuantity() - $amount < 1) {
            throw new Exception("Product quantity can not be less than 1");
        }
        $this->quantity -= $amount;
    }
}
