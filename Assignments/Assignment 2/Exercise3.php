<?php

function tableLoop() {
    $i = 1;
    $j = 0;

    echo "<table border='1'>";

    while($i <= 15) { //row count
        echo "<tr>";
        $j = 0;
    while($j < 5) { //column count
        $j++;
        echo "<td> Row $i Cell $j</td>";    
    }
   
    echo "</tr>";
    $i++;
}
    echo "</table>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
        <p><?php echo tableLoop(); ?></p>
</body>
</html>