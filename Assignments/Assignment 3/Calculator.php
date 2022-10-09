<?php
class Calculator{

    function calc($argument, $var1, $var2) {
        if($argument === "+") {
            $sum=$var1+$var2;
            echo "The sum of the numbers is $sum </br>" ;
        }else if ($argument === "-") {
            $dif=$var1-$var2;
            echo "The difference of the numbers is $dif </br>";
        }else if ($argument === "*") {
            $prod=$var1*$var2;
            echo "The product of the numbers is $prod </br>";
        }else if ($argument === "/") {
            if($var2 == 0) {
                echo "Can't divide by zero </br>";
            }else {
                $quotient=$var1/$var2;
                echo "The quotient of the numbers is $quotient </br>";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
</body>
</html>