<?php
function swapValues(&$a, &$b) {
     list($b, $a) = array($a, $b);
 }
$a = 10;
$b = 20;
swapValues($a, $b);
print $a . ',' . $b;
?>