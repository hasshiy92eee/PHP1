<?php

// declare(strict_types=1);

function twice(float $var): int
{
}

//暗黙の型変換（弱い型付け）
$var *= 2;
return $var;

$num = 10.8;
$result = twice($num);
echo "{$num}の2倍は", $result;
