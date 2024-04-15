<?php
$ans1 = "1200秒" / 60;
$ans2 = "400メートル" * 4;
$ans3 = "5400円" / "4人";
echo $ans1, "、 ", $ans2, "、 ", $ans3, PHP_EOL;
// Warning
// 20、 1600、 1350
var_dump("1200秒" == 1200);  // false

