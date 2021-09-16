<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Ex. - 4 The if elseif else Statement
$totalno = 150;
$per = $totalno/500*100;
echo "Your percentage is : ",$per;
echo "<br>";
if($per>=90){
    echo "A - Grade";
}elseif($per>=70){
    echo "B - Grade";
}elseif($per>=50){
    echo "C - Grade";
}else {
    echo "Fail";
}

    ?>
</body>
</html>