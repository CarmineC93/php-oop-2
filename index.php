<?php
require_once __DIR__ . "/Models/Products.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/db_.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
.css">

</head>

<body>
    <main>
        <section class="container">
            <h1>Animals Shop</h1>

            <div class="row row-cols-3">
                <?php foreach ($products as $product) { ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo  $product->$img; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->$name; ?></h5>
                                <p class="card-text"><?php echo $product->$description; ?></p>
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