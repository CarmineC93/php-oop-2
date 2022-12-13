<?php
require_once __DIR__ . "/Products.php";


class Toys extends Products
{
    public $material;

    public function __construct(String $name, int $id, String $description, String $img, Category $category, float $price, String $material)
    {
        parent::__construct($name, $id, $description, $img, $category, $price);
        $this->material = $material;
    }

    public function printMaterial()
    {
        return "$this->material";
    }
}
