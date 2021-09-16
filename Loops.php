<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// The while loop
// $a = 1;

// while($a <= 6) {
//   echo "The number is: $a <br>";
//   $a++;
// }

// The do while loop 
// $a = 11;

// do {
//   echo "The number is: $a <br>";
//   $a++;
// } while ($a <= 10);

// The for loop ex. 1
// for ($a = 0; $a <= 20; $a++) {
//     echo "The number is: $a <br>";
//   }

// The for loop ex. 2
// $num=25;
// $b;
// for ($a = 1; $a <= 10; $a++) {
//     $b = $num * $a;
//     echo "$num X $a =  $b <br>";
//   }  

// The foreach loop 
$mobile = array("Nokia", "Samsung", "Sony", "Apple"); 

foreach ($mobile as $value) {
  echo "$value <br>";
}
?>
</body>
</html>