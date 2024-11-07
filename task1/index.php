<?php

require_once('Product.php');
define('IMAGE_PATH', 'http://oop.test/task1/images/');


$product1 = new Product();
$product1->name = 'Samsung Galaxy S10';
$product1->price = 2000;
$product1->brand = 'Samsung';
$product1->image = IMAGE_PATH . 'samsung.jpeg';
$product1->description = 'Samsung Galaxy S10 is a smartphone that was released in 2019.';




$product2 = new Product();
$product2->name = 'iPhone 11';
$product2->price = 5000;
$product2->brand = 'Apple';
$product2->image = IMAGE_PATH . 'apple.jpg';
$product2->description = 'iPhone 11 is a smartphone that was released in 2019.';


$product3 = new Product();
$product3->name = 'Huawei P30';
$product3->price = 1000;
$product3->brand = 'Huawei';
$product3->image = IMAGE_PATH . 'huawei.webp';
$product3->description = 'Huawei P30 is a smartphone that was released in 2019.';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $product1->image ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product1->getName() ?></h5>
                        <p class="card-text"><?= $product1->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Discount: $<?= $product1->priceAfterDiscount(20) ?></li>
                        <li class="list-group-item">Price: $<?= $product1->getFinalPrice() ?></li>
                        <li class="list-group-item">Brand: <?= $product1->brand ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $product2->image ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product2->getName() ?></h5>
                        <p class="card-text"><?= $product2->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Discount: $<?= $product2->priceAfterDiscount(20) ?></li>
                        <li class="list-group-item">Price: $<?= $product2->getFinalPrice() ?></li>
                        <li class="list-group-item">Brand: <?= $product2->brand ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $product3->image ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product3->getName() ?></h5>
                        <p class="card-text"><?= $product3->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Discount: $<?= $product3->priceAfterDiscount(20) ?></li>
                        <li class="list-group-item">Price: $<?= $product3->getFinalPrice() ?></li>
                        <li class="list-group-item">Brand: <?= $product3->brand ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>