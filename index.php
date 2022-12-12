<?php
require_once __DIR__ . "/Models/Products.php";
require_once __DIR__ . "/Models/Category.php";


$ciotola = new Products(
    "Ciotola per gatti",
    01,
    "Ciotola per gatti di medie dimensioni",
    "",
    $category,
    50
);

var_dump($ciotola);
