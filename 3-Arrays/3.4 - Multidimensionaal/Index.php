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
       $abcGetallen= array (
        array ("A", "B", "C", "D"),
        array ("24", "56", "78", "90")
       );
       echo $abcGetallen[0][0];
       echo $abcGetallen[1][1];
       echo $abcGetallen[0][2];
       echo $abcGetallen[1][3];

?>
</ul>
</body>
</html>