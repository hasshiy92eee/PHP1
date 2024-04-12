<?php
$tax = 0.1;

function taxPrice($tanka, $kosu)
{
    global $tax;

    $ryoukin = $tanka * $kosu * (1 + $tax);
}

$result = taxPrice(250, 4, $tax);
echo "{$result}円です。税込み" . $tax * 100 . "%";
