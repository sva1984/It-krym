<?php
function square($n)
{
    return($n * $n);
}

$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$b = array_map("square", $a);
print_r($b);
?>
