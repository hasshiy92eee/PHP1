<?php
$subject = "吾輩は猫である";
echo str_replace("猫", "犬", $subject), PHP_EOL;  // 吾輩は犬である
echo str_replace("猫", "馬", $subject), PHP_EOL;  // 吾輩は馬である
echo $subject, PHP_EOL;                           // 吾輩は猫である
$subject = str_replace("猫", "カバ", $subject);
echo $subject;
