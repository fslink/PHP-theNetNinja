<?php

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

function sayHello($name = 'mario'){
    echo "Salut $name ma petite gueule !";
}

// sayHello();

function formattedProduct($product){
    // echo "The product {$product['name']} costs {$product['price']} to buy";
    return "The product {$product['name']} costs {$product['price']} to buy </br>";
}

$formatted[] = formattedProduct($products[0]);
$formatted[] = formattedProduct(['name' => 'blue shell', 'price' => 25]);

echo $formatted[0];
echo $formatted[1];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial NetNinja</title>
</head>
<body>

</body>
</html>