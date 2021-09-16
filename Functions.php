<html>
<body>
<?php 

// Examples of PHP Built-in Functions
// Example - 1
//  echo "The Date is " . date("d/m/Y");

// Example - 2
// echo(sqrt(4)); //The sqrt() function returns the square root of a number:

// Example - 3
// echo(min(2, 160, 30, 20, 9, 50));  
// echo "<br>";
// echo(max(0, 160, 30, 20, 9, 50));


// Examples of PHP User Defined Functions
// Example - 1
// echo "Welcome to php <br>";
// function printline() {
//     for($i=1;$i<=100;$i++)
//     {
//         echo "-";
//     }
//   }
//   printline();
//   echo "<br> You are learning about php functions <br>";
//   printline();

// Example - 2
function calcper($total)
{
    $per = $total/500*100;
    return ($per);
}
echo "Sunil Totla Marks is 300 & Percentage is : ";
echo calcper(300);
?>
<html>
<body>