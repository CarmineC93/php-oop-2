<?php
require_once __DIR__ . "/Models/Products.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Toys.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/AnimalsBed.php";

require_once __DIR__ . "/Models/Customer.php";
require_once __DIR__ . "/Models/ShoppingBasket.php";
require_once __DIR__ . "/Models/CreditCard.php";

require_once __DIR__ . "/database/db_.php";

//SIMNULAZIONE ORDINE 
//acquirente 
$guest = new Customer("Enzo", "enzo@libero.com");
//carrello
$guest->basket = new ShoppingBasket();
$guest->basket->add($gioco2);
$guest->basket->add($cuccia2);
$total = $guest->basket->getTotal();
var_dump($total);
// pagamento
$guest->insertCreditCard(new CreditCard("5555 4444 3206 555", "195", "12", "2022"));
var_dump($guest);
$result = $guest->pay($total);
var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <main>
        <section class="container">
            <h1>Animals Shop</h1>

            <div class="row row-cols-3">
                <?php foreach ($products as $product) { ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo  $product->img; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->name; ?></h5>
                                <img class="icon" src="<?php echo $product->category->printIcon() ?>" alt="">
                                <p class="card-text"><?php echo $product->category->name; ?> </p>
                                <h6 class="card-title">cod. <?php echo $product->id; ?></h6>

                                <p class="card-text"><?php echo $product->description; ?></p>
                                <?php if (get_class($product) === "Toys") { ?>
                                    <p class="card-text"><?php echo $product->material ?></p>
                                <?php } ?>

                                <?php if (get_class($product) === "Food") { ?>
                                    <p class="card-text"><?php echo $product->weight_kg ?></p>
                                    <p class="card-text"> Al gusto di: <?php echo $product->taste ?></p>
                                <?php } ?>

                                <?php if (get_class($product) === "AnimalsBed") { ?>
                                    <p class="card-text"><?php echo $product->dimension  ?></p>
                                <?php } ?>

                                <h6 class="card-title"><?php echo $product->price; ?> $</h6>

                                <a href="#" class="btn btn-primary">Compra</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>

</body>

</html>