<?php
$course = "B";
$price = match($course) {
  "A" => diner(2800),
  "B" => diner(4000),
};

function diner($total) {
  $time = date("G");   // 現在の時刻 15
  if ($time >= 21) {
    $total += 500;
  }
  return $total;
}

$now = date("G:i");   // 時:分
echo "{$course}コースは{$price}円。{$now}";
