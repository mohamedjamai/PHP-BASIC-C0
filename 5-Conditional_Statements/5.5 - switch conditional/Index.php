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

$score = 5;

switch($score) {
    case 10:
    echo "Wow wat een fantastische score!";
    break;
    case 9:
    echo "Wow bijna alle punten nog 1 te gaan!";
    break;
    case 8:
    echo "Goed bezig, bijna alle punten!";
    break;
    case 7:
    echo "Ga zo door!";
    break;
    default:
    echo "Nog even oefenen dan haal je vast alle punten!";
}

?>
© 2022 GitHub, Inc.
Terms
Privacy

</ul>
</body>
</html>