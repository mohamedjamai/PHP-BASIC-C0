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
$test2 = "gewoon tekst";

var_dump($test1==$test2);
echo "<br>";
var_dump($test1 === $test2);
echo "<br>";
var_dump($test1 != $test2);
echo "<br>";
var_dump($test1 > $test2);
echo "<br>";
var_dump($test1 < $test2);
echo "<br>";
var_dump($test1 <> $test2);
echo "<br>";
var_dump($test1 >= $test2);
echo "<br>";
var_dump($test1 <= $test2);

?>
</ul>
</body>
</html>