<?php
$a = mt_rand(0, 50);
$b = mt_rand(0, 50);
$bigger = ($a > $b) ? $a : $b;
echo "大きな値は{$bigger}、\$a は{$a}、\$b は{$b}";
// 大きな値は36、36、$bは23
// 大きな値は36、$aは36、$bは24
// 大きな値は37、$aは37、$bは35
// 大きな値は22、$aは2、$bは22
