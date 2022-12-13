<?php
require_once __DIR__ . "/Products.php";

class Food extends Products
{
    public $weight_kg;
    public $taste;

    public function __construct(String $name, int $id, String $description, String $img, Category $category, float $price, int $weight_kg, String $taste)
    {
        parent::__construct($name, $id, $description, $img, $category, $price);
        $this->weight_kg = $weight_kg;
        $this->taste = $taste;
    }

    public function printWeight_kg()
    {
        return "$this->weight_kg";
    }

    public function printTaste()
    {
        return "$this->taste";
    }
}
