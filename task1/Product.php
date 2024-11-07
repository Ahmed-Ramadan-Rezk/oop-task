<?php

class Product
{
    var $name;
    var $price;
    var $brand;
    var $image;
    var $description;
    var $tax = 10;


    public function getName(): string
    {
        return $this->name;
    }

    public function priceAfterDiscount($discount): float|int
    {
        $this->price = $this->price - $discount;
        return $this->price;
    }

    public function getFinalPrice(): float|int
    {
        return $this->price + (($this->tax / 100) * $this->price);
    }
}
