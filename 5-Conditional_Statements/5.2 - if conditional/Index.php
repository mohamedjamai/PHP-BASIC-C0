<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BEGINNING</title>
</head>
<body>
    <h1> PHP BEGINNING </h1>

<ul>
<?php
$test1 = 10;

$test2 = 10;

if($test1 == $test2){
    echo("gelijk <br>");
}

if($test1 != $test2){
    echo("ongelijk <br>");
}

if($test1 === $test2){
    echo("identiek <br>");
}

if($test1 > $test2){
    echo("test1 is groter dan test2 <br>");
}

if($test1 < $test2){
    echo("test1 is kleiner dan test2 <br>");
}

if($test1 >= $test2){
    echo("test1 is groter of gelijk aan test2 <br>");
}

if($test1 <= $test2){
    echo("test1 is kleiner of gelijk aan test2 <br>");
}
?>
</ul>
</body>
</html>