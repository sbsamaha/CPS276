<?php
$hello = "Hello World";

$test = "this is a 'test' string";

$string = "This is a string";
echo $string[2]; //outputs i

$favAnimal = "cat";

$string2 = "You can also ";
$string2 .= "add to strings using the ";
$string2 .= "dot-equals (.=) operator";

$i=1;
do{
 $i++;
 echo $i;
}
while ($i < 10);

$string3 = "scott";
function myFunction(){
$string3 = "john";
return string;
}

echo $string3; //OUTPUTS SCOTT BECAUSE THE FUNCTION IS NOT CALLED

function recursive($i){
    echo "The value of variable i is $i<br>";
    $i += 1;
    if ($i <= 10){
    recursive($i);
    }
   }
   $i = 1;
   recursive($i);

   $arr = [1,2,3,4];

   print_r($arr);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
       <p>This is HTML and <?php echo "this is php";?></p>
       <p><?php echo $hello; ?></p>
       <p><?php echo $string[3] = "a"; ?></p>
       <p><?php echo "My favorite animals are {$favAnimal}s" ?></p>
       <p><?php echo $string2; ?></p>
       <p><?php echo $i; ?></p>
      
       

</body>
</html>