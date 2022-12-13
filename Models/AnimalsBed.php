<?php
require_once __DIR__ . "/Products.php";


class AnimalsBed extends Products
{
    public $dimension;

    public function __construct(String $name, int $id, String $description, String $img, Category $category, float $price, String $dimension)
    {
        parent::__construct($name, $id, $description, $img, $category, $price);
        $this->dimension = $dimension;
    }

    public function printDimension()
    {
        return $this->dimension;
    }
}
