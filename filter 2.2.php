<?php
function even($var)
{
    if($var%2==0){ // является ли переданное число четным
        return($var);
    }

}


$array = array(0,2,3,4,5,6, 7, 8, 9, 10, 11, 12);


echo "Четные:\n";
print_r($array=array_filter($array, "even")) .PHP_EOL;

?>