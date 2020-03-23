<?php
    define('NAME', 'Jedi');
    $name = 'soso';
    $age = 32;
    echo $name;
    define('NAME', 'Denis');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Hello, $name'; ?></h1>
    <h2><?php echo NAME, ' ', $age; ?></h2>
</body>
</html>