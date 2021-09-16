<?php
// Arrays in php Ex. 1 (Indexed Arrays)
// $name = array("Sonu","Raj","Hemant","Rahul");
// echo count($name);

// Arrays in php Ex. 2 (Indexed Arrays)
// $name = array("Sonu","Raj","Hemant","Rahul");
// $arrlength = count($name);
// for($x = 0; $x < $arrlength; $x++) {
//   echo "Index Number [$x] ",$name[$x];
//   echo "<br>";
// }

// Arrays in php Ex. 3 (Associative Arrays)
// $marks = array("Phy"=>"60", "Che"=>"65", "Math"=>"75");
// echo "Rahul has got " . $marks['Math'] . " marks.";

// Arrays in php Ex. 4 (Multidimensional Arrays)
$mobile = array (
    array("Nokia",15000,3),
    array("Samsung",20000,2),
    array("Sony",25000,4),
    array("Apple",60000,6)
  );
      
  for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col < 3; $col++) {
      echo $mobile[$row][$col];
      echo "  |  ";
    }
    echo "<br>";
  }
?>