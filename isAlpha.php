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

$alphastrng = $_POST["AlphaStrg"];
isItAlpha($alphastrng)
    ?>
    

</body>
</html>