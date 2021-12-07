<?php

class Product
{
    private $price;
    private $weight;

    public function __construct($price, $weight)
    {
        $this->price = $price;
        $this->weight = $weight;
    }

    function getWeight()
    {
        return $this->weight;
    }
}


class Shipping
{
    private $totalShipping;

    public function calculateTotalShipping($weight, $pricePerKilogram){
        return $weight = $pricePerKilogram;
    }
}

$product = new Product(5, 1);

$pricePerKilogram = 5;

$shipping = new Shipping();
$totalShippingPrice = $shipping->calculateTotalShipping($product->getWeight(), $pricePerKilogram);

var_dump($totalShippingPrice);




//Inclute function.php
// function calculateShipping($productWeight, $pricePerKilogram, $hasFreeShipping){

//     if(!$hasFreeShipping){
//         return $productWeight * $pricePerKilogram;
//     }
// }

// // $products = $_SESSION['products'];
// $products[1]['weight'] = 1;
// $products[1]['price'] = 6;
// $products[1]['freeShipping'] = true;

// $products[2]['weight'] = 2;
// $products[2]['price'] = 3;
// $products[2]['freeShipping'] = false;

// $pricePerKilogram = 5;

// $totalShippingPrice = 0;

// foreach($products as $product){
//     $totalShippingPrice = calculateShipping($product['weight'], $pricePerKilogram, $product['freeShipping']);
// }

// echo $totalShippingPrice;