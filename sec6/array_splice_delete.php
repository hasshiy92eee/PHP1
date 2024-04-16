<?php
$myArray = ["a", "b", "c", "d", "e"];
$removed = array_splice($myArray, -3, 2);
echo '実行後：$myArray', PHP_EOL;
print_r($myArray);
echo '戻り：$removed', PHP_EOL;
print_r($removed);
/*
実行後：$myArray
Array
(
    [0] => a
    [1] => d
    [2] => e
)
戻り：$removed
Array
(
    [0] => b
    [1] => c
)
*/
