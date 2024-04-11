<?php
$num1 = round(1.5, 0, PHP_ROUND_HALF_UP);
$num2 = round(-1.5, 0, PHP_ROUND_HALF_DOWN);
$num3 = round(3.5, 0, PHP_ROUND_HALF_EVEN);
$num4 = round(4.5, 0, PHP_ROUND_HALF_ODD);

var_dump($num1);  // float(2)
var_dump($num2);  // float(1)
var_dump($num3);  // float(2)
var_dump($num4);  // float(3)
