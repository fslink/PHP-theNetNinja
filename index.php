<?php

// $price = 20;

// if($price < 20){
//     echo 'condition is met';
// } elseif($price < 30) {
//     echo 'elseif condition is met';
// } else {
//     echo 'condition is not met';
// }

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ALl products < 20 ET products > 10</h2>
    <ul>
        <?php foreach ($products as $key => $product) { ?>
            <?php if ($product['price'] < 20 && $product['price'] > 10) { ?>
                <li><?php  echo $product['name']; ?></li>
            <?php }
        } ?>
    </ul>
    <h2>ALl products < 20 </h2>
    <ul>
        <?php foreach ($products as $key => $product) { ?>
            <?php if ($product['price'] < 20) { ?>
                <li><?php  echo $product['name']; ?></li>
            <?php }
        } ?>
    </ul>

</body>
</html>