<?php
require_once __DIR__ . "/Models/Products.php";
require_once __DIR__ . "/Models/Category.php";

$products = [
    new Toys("Gioco per cani", 01, "Gioco per cani", "./assets/gioco-cane.jpg", new Category("cani"), 50, "plastic"),
    new Toys("Palla per gatto", 02, "Gioco per gatti", "./assets/gioco-gatti.jpg", new Category("gatti"), 80, "plastic"),
    new Food("Cibo per cani", 03, "Crocchette per cani con limone", "./assets/cibo_cane.jpg", new Category("cani"), 40, 12, "lemon"),
    new Food("Cibo per gatti", 04, "Crocchette per gatti con pollo", "./assets/cibo_gatti.PNG", new Category("gatti"), 35, 8, "pollo"),
    new AminalsBed("Cuccia per cani", 05, "Cuccia in legno per cani", "./assets/cuccia-cane.jpg", new Category("cani"), 250, "50cm x 80cm x 140cm"),
    new AminalsBed("Cuccia per gatti", 06, "Cuccia in legno per gatti", "./assets/cuccia-gatto.jpg", new Category("gatti"), 300, "30cm x 50cm x 100cm")
];

var_dump($products);
