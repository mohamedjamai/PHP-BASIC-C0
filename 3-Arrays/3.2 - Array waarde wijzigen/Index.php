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
        $myHeroes =array ("Opa");
        $myHeroes[1] = "Papa";
        array_push($myHeroes, "Mama");
        print_r($myHeroes);

?>
</ul>
</body>
</html>