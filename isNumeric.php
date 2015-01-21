<html>
<body>

<?php 

//$numstring = $_POST["NumStrg"];  

function  isItaNumber ($numstring){
if (is_numeric($numstring)) {
     echo "Input '{$numstring}' is numeric!";
     
     }else {
         echo "Input '{$numstring}' is not numeric!";
     } 
}

$numstrng = $_POST["NumStrg"];
isItaNumber($numstrng)
    ?>
    

</body>
</html>