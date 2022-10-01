<?php

function listLoop() {
    $i = 1;
    $j = 0;

    echo "<ul>";

    while($i <= 4) { // list value
        echo "<li> $i";
        $j = 0;

    while($j < 5) { //sublist value
        $j++;
        echo "<ul> <li> $j </li> </ul>"; 
    }
        $i++;
        echo "</li>";
        
    }
        echo "</ul>";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <p><?php echo listLoop();?></p>
</body>
</html>