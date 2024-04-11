<?php
$colorNumber = 1;
$colorName = match($colorNumber) {
  0 => "青",
  1, 2 => "緑",
  3 => "黒",
  default => '白',
};
echo "{$colorNumber}番は、{$colorName}色です。";
// 1番は、緑色です。
