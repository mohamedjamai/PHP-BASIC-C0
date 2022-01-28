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
$test1 = 3;
$test2 = 6;

 if ($test1 == $test2) {
     echo "True";
 } else {
     echo "false";
 }

 echo '<br>';
 
 if ($test1 !== $test2) {
    echo "True";
} else {
    echo "false";
}

echo '<br>';

if ($test1 > $test2) {
    echo "True";
} else {
    echo "false";
}

echo '<br>';

if ($test1 < $test2) {
    echo "True";
} else {
    echo "false";
}

echo '<br>';

if ($test1 >= $test2) {
    echo "True";
} else {
    echo "false";
}

echo '<br>';

if ($test1 <= $test2) {
    echo "True";
} else {
    echo "false";
}

?>
</ul>
</body>
</html>