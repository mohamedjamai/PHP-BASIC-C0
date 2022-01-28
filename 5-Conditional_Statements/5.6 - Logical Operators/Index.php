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

$x = 1;
$y = 10;

if($x<$y && $x>$y){
    echo "true";
} else{
    echo "false";
}

if($x<$y || $x>$y){
    echo "true";
} else{
    echo "false";
}

if($x<$y xor $x>$y){
    echo "true";
} else{
    echo "false";
}

if(!$x){
    echo "true";
} else{
    echo "false";
}

?>


</ul>
</body>
</html>