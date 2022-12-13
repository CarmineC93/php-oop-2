<?php
require_once __DIR__ . "/../Models/Products.php";
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Toys.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/AnimalsBed.php";

$gioco1 = new Toys("Gioco per cani", 01, "Gioco per cani", "./assets/gioco-cane.jpg", new Category("cani"), 50, "plastic");
$gioco2 = new Toys("Palla per gatto", 02, "Gioco per gatti", "./assets/gioco-gatti.jpg", new Category("gatti"), 80, "plastic");
$cibo1 = new Food("Cibo per cani", 03, "Crocchette per cani con limone", "./assets/cibo_cane.jpg", new Category("cani"), 40, 12, "limone");
$cibo2 = new Food("Cibo per gatti", 04, "Crocchette per gatti con pollo", "./assets/cibo_gatti.PNG", new Category("gatti"), 35, 8, "pollo");
$cuccia1 = new AnimalsBed("Cuccia per cani", 05, "Cuccia in legno per cani", "./assets/cuccia-cane.jpg", new Category("cani"), 250, "50cm x 80cm x 140cm");
$cuccia2 = new AnimalsBed("Cuccia per gatti", 06, "Cuccia in legno per gatti", "./assets/cuccia-gatto.jpg", new Category("gatti"), 300, "30cm x 50cm x 100cm");

$products = [$gioco1, $gioco2, $cibo1, $cibo2, $cuccia1, $cuccia2];

//var_dump($products);
