<?php
$color = "yellow";
switch ($color) {
  case "green":
    $price = 120;
    break;
  case "red":
    $price = 140;
    break;
  default:
    $price = 100;
}
echo "{$color}は{$price}円。";
