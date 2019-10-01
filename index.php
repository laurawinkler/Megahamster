<!DOCTYPE html>
<?php
require 'classes/room.php';
require 'classes/oktagon.php';
require 'classes/square.php';
?>
<html lang="de">
<head>
    <title>Megahamster</title>
</head>
<body>
<header id="welcome">
</header>
<section id="list-products">
    <?php
    $products_array = [$room = new square('The Room', 49.00, 'none', 80, 50, 50),
        $flat = new square('The Flat', 149.00, 'Food jars', 120, 80, 80),
        $pit = new oktagon('The Pit', 69.00, ' Hamster training gloves <br> Hamster punching sack', 20)];
    foreach ($products_array as $product) {
        echo $product->toHTML();
        echo 'Size: ' . $product->getSizes() . '<br>';
        echo 'Area: ' . $product->getArea() . ' cm^2';
    }
    ?>
</section>
</body>
</html>


