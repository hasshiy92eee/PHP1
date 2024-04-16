<?php
$data = ["赤井一郎", "伊藤五郎", "上野伸二"];
$glue = "さん、";
$nameList = implode($glue, $data);
$nameList .= "さん";
print_r($nameList);
// 赤井一郎さん、伊藤五郎さん、上野伸二さん
