<?php
function price($tanka, $kosu)
{
    $souryo = 250;
    $ryoukin = $tanka * $kosu;

    if ($ryoukin < 5000) {
        $ryoukin += $souryo;
    }
    return $ryoukin;
}

$kingaku = price(2400, 2);

echo "金額1は{$kingaku1}円。";
