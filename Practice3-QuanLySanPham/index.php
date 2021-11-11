<?php
include_once "Models/Product.php";
include_once "Services/ProductManger.php";

use Services\ProductManger;
use Models\Product;

$productManager = new ProductManger();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));
$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() . "<br/>";
}
