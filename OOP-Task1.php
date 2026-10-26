<?php
// <!-- Practice | Task | Lecture 1
// • define a product class
// • set these properties ( name, price, brand, image, description,tax)
// set these methods (getName, priceAfter Discount(number), getFinalPrice
// )
// • show all data in bootstrap card
// steps
// О define a class
// ○ make three objects
// ○ set all data for the properties
// о use the methods
// о display final data in bootstrap card -->
// <!-- ------------------------------------------- -->



class product
{
    public string $name;
    public int $price;
    public string $brand;
    public string $image;
    public string $description;
    public int $tax;
    const DISCOUNT = 20;

    public function getName($name)
    {
        echo $this->name = $name;
    }

    public function priceAfterDiscount($price)
    {   
        echo 'Price after Discount ' . $this->price = $price - self::DISCOUNT;
    }

    public function getFinalPrice($tax)
    {
        echo ' Final Price ' . $this->price + $tax;
    }
}


$prod1 = new product();
$prod2 = new product() ;

$prod1->name = 'Arc Wireless Headphones';
$prod1->price = 100;
$prod1->brand = 'Audio';
$prod1->image = 'images/headphones.jpg';
$prod1->description = 'Wireless headphones for everyday listening.';
$prod1->tax = 10;

$prod2->name = 'Meridian Leather Watch';
$prod2->price = 129;
$prod2->brand = 'Accessories';
$prod2->image = 'images/watch.jpg';
$prod2->description = 'A classic leather watch for everyday wear.';
$prod2->tax = 13;

$prod3 = new product();
$prod3->name = 'Commuter Backpack 22L';
$prod3->price = 99;
$prod3->brand = 'Bags';
$prod3->image = 'images/backpack.jpg';
$prod3->description = 'A practical backpack with 22 liters of storage.';
$prod3->tax = 10;

$prod4 = new product();
$prod4->name = 'Canvas Market Tote';
$prod4->price = 38;
$prod4->brand = 'Bags';
$prod4->image = 'images/tote.jpg';
$prod4->description = 'A reusable canvas tote for shopping and daily use.';
$prod4->tax = 4;



?>