<?php

namespace Services;

class ProductManger
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}