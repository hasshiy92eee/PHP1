<?php



function tsubo($sai)
{
    if ($sai % 2 === 0) {
        return "丁(。´･ω･)?";
    } else {
        return "半(｀・ω・´)";
    }
}

echo tsubo($kill)

function toba()
{
    $x = mt_rand(2, 12);
    echo tsubo($kill);
}
toba();




?>
</pre>