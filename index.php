<?php
// //index array

//  $persosOne = ['cartman', 'keny', 'mother fucker'];
// // echo $persosOne[1];

// $persosTwo = array('morrigan', 'berserk', 'don juan');
// // echo $persosTwo[2];
// // print_r($persosTwo);

// // echo '</br>';

// // $ages = [20, 30, 40, 50];
// // $ages[1] = 40;

// // $ages[] = 60;
// // array_push($ages, 70);

// // print_r($ages);

// // echo '</br>';
// // echo count($ages);

// $peopleThree = array_merge($persosOne, $persosTwo);
// print_r($peopleThree);
// echo '</br> array length: ' . count($peopleThree); 

//associative array
$persosOne = ['mario' => 'red', 'luigi' => 'green', 'peach' => 'pink'];
// print_r($persosOne);
$persosOne['mario'] = 'black';
// print_r($persosOne);

$persosTwo = array('link' => 'green', 'toad' => 'white', 'bowser' => 'purple');
// print_r($persosTwo);

$persosThree = array_merge($persosOne, $persosTwo);
print_r($persosThree);
echo '</br> ' . count($persosThree);

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