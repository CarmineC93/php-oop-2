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
