<?php
require_once __DIR__ . "/Category.php";

class Products
{
    public $name;
    public $id;
    public $description;
    public $img = "";
    public $category;
    public $price;


    public function __construct(String $name, int $id, String $description, String $img, Category $category, int $price)
    {
        $this->name = $name;
        $this->id = $id;
        $this->description = $description;
        $this->img = $img;
        $this->category = $category;
        $this->price = $price;
    }
}

class Food extends Products
{
    public $weight_kg;
    public $taste;

    public function __construct(String $name, int $id, String $description, String $img, Category $category, int $price, int $weight_kg, String $taste)
    {
        parent::__construct($name, $id, $description, $img, $category, $price);
        $this->weight_kg = $weight_kg;
        $this->taste = $taste;
    }
}

class Toys extends Products
{
    public $material;

    public function __construct(String $name, int $id, String $description, String $img, Category $category, int $price, int $material)
    {
        parent::__construct($name, $id, $description, $img, $category, $price);
        $this->material = $material;
    }
}

class AminalsBed extends Products
{
    public $dimension;

    public function __construct(String $name, int $id, String $description, String $img, Category $category, int $price, int $dimension)
    {
        parent::__construct($name, $id, $description, $img, $category, $price);
        $this->dimension = $dimension;
    }
}
