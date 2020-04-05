<?php

$blogs = [
    ['title' => 'mario party', 'author' => 'Korben','content' => 'lorem', 'likes' => 30],
    ['title' => 'luigi mansion', 'author' => 'Korben','content' => 'lorem', 'likes' => 100],
    ['title' => 'resident evil 4', 'author' => 'Chef Otaku', 'content' =>'lorem', 'likes' => 10]
];

// print_r($blogs);
// echo $blogs[1]['title'];

$blogs[] = ['title' => 'Baiten Kaitos', 'author' => 'Monsieur Phil', 'content' => 'lorem', 'likes' => 87];
// print_r($blogs[count($blogs)-1]);
// print_r($blogs);

$popped = array_pop($blogs);
// print_r($popped);
print_r($blogs);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>