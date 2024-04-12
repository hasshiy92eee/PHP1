<?php
$value = 123.456;

$num1 = round($value); //小数点第1位を四捨五入
$num2 = round($value, 2); //少数第3位を四捨五入
$num3 = round($value, -1); //1の桁を四捨五入
var_dump($num1);
var_dump($num2);
var_dump($num3);
