<?php
$myArray = ["a" => 10, "b" => 20, "c" => 30, 
            "d" => 40, "e" => 50];
$removed = array_splice($myArray, 1, 2);
echo '実行後：$myArray', PHP_EOL;
print_r($myArray);
echo '戻り：$removed', PHP_EOL;
print_r($removed);
/*
実行後：$myArray
Array
(
    [a] => 10 
    [d] => 40 
    [e] => 50 
)
戻り：$removed
Array
(
    [b] => 20 
    [c] => 30 
)

*/
