<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Sunil";
    $class = "12th";
    $phy = 68;
    $che = 78;
    $math = 86;
    $eng = 65;
    $hindi = 55;

    $total = $phy + $che + $math + $eng + $hindi;

    $per = $total/500*100;

    echo "Student name is = $name<br>";
    echo "Student class is = $class<br>";
    echo "Student total number is = $total<br>";
    echo "Student percentage is = $per<br>";
    ?>
</body>
</html>