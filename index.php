<?php 

ini_set('display_errors', 1); // Visualize Errors
include_once __DIR__ . "./classes/Card.php";
include_once __DIR__ . "./classes/Cart.php";
include_once __DIR__ . "./classes/Product.php";
include_once __DIR__ . "./classes/UnregisteredUser.php";
include_once __DIR__ . "./classes/RegisteredUser.php";

$product = new Product("Collare", "Accessori per cani", 5.32);
$product2 = new Product("Cuccia", "Accessori per cani", 22);
$product3 = new Product("Croccantini", "Cibo per cani", 40);
$card = new Card("Luca Bianchi", "1234567890123456", 2023, 1, 1, "111");

$gianni = new RegisteredUser("Luca Bianchi", "Luca@gmail.com","password", $card);
$gianni->getCart()->addProduct($product);

$guest = new UnregisteredUser($card);
$guest->getCart()->addProduct($product);
$guest->getCart()->addProduct($product2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>
    <p>Cart total cost: <?php var_dump($gianni->getTotalCartAmount());?></p>
    <p>Cart total cost non-registered user: <?php var_dump($guest->getTotalCartAmount());?></p>
    <p>Can the user pay?: <?php var_dump($gianni->pay());?></p>
    <p>Is the user card expired?: <?php var_dump($card->isExpired()) ?></p>
</body>
</html>