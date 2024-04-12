<?php


function twice(string | float $var): float
{
    if (is_numeric($var)) {
        return (float)$var * 2;
    } else {
        return 0;
    }
}

$num1 = "1.9";
$num2 = 2.6;
$result1 = twice($num1);
$result2 = twice($num2);
echo "{$num1}の2倍は", $result1, "<br>", PHP_EOL;
echo "{$num2}の2倍は", $result2;
