<?php
$data = "赤井一郎, 伊藤五郎, 上野伸二";
$delimiter = ",";
$nameList = explode($delimiter, $data);
print_r($nameList);
