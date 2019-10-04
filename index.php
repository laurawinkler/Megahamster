<!DOCTYPE html>
<?php
require 'classes/Room.php';
require 'classes/Oktagon.php';
require 'classes/Square.php';
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
    $products_array = [
            new Square('The Room', 49.00, ['none'], 80, 50, 50),
        new Square('The Flat', 149.00, ['Food jars'], 120, 80, 80),
        new Oktagon('The Pit', 69.00, [ 'Hamster training gloves','Hamster punching sack'], 20)];
    foreach ($products_array as $product) {
        echo $product->toHTML();
    }
    ?>
</section>
</body>
</html>


