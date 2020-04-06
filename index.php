<?php

$blogs = [
    ['title' => 'mario party', 'author' => 'Korben','content' => 'lorem', 'likes' => 30],
    ['title' => 'luigi mansion', 'author' => 'Korben','content' => 'lorem', 'likes' => 100],
    ['title' => 'resident evil 4', 'author' => 'Chef Otaku', 'content' =>'lorem', 'likes' => 10]
];

// $blogs = ['mario party', 'Korben','lorem', 30];

// for($i = 0; $i < count($blogs); $i++){
//     echo $blogs[$i] . '<br>';
// }

// foreach($blogs as $blog){
//     echo $blog['title'] . ' - ' . $blog['author'] . ' - ' . $blog['likes'];
//     echo '<br>';
// }

// $i = 0;
// while($i < count($blogs)){
//     echo $blogs[$i]['title'] . '<br>';
//     $i++;
// }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php foreach($blogs as $blog){?>
        <h3><?php echo $blog['title'] ?></h3>
        <p>$ - <?php echo $blog['likes'] ?></p>
    <?php } ?>

</body>
</html>