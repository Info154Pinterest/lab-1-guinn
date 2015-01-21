<html>
<body>

<?php 

function  isItAlpha ($alphastring){
if (ctype_alpha($alphastring)) {
     echo "Input '{$alphastring}' is entirely alphabetic!";
     
     }else {
         echo "Input '{$alphastring}' is not entirely alphabetic!";
     } 
}

function  isItaNumber ($numstring){
if (is_numeric($numstring)) {
     echo "Input '{$numstring}' is numeric!";
     
     }else {
         echo "Input '{$numstring}' is not numeric!";
     } 
}


$testValues = array(44.29, 45,-1, +1, 'a343', 'bbb', 'b.129');

echo "<h1>Alphabetic Test </h1>";
foreach ($testValues as $value)
    {
        isItAlpha($value);
        echo "</br>";
    }
echo "</br> <h1>Numeric Test </h1>";
foreach ($testValues as $value) 
    {
        isItaNumber($value);
        echo "</br>";
    }
    ?>
    

</body>
</html>