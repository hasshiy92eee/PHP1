<?php
function double($n) {
  $result = $n * 2;
  return $result;  // $resultの中身
}

$ans = double(125);
echo $ans;    // 250

function plus($n, $m) {
  $result = $n + $m;
  return $result;
}

$ans = plus(3, 5);
echo $ans;   // 8
