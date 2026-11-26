<?php
$arr = [1, 2, 3, 4, 5];
$lastElement = array_pop($arr); 
array_unshift($arr, $lastElement); 
print_r($arr);
