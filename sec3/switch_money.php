<?php
$money = "120";     // ==
switch ($money) {
  case 120:     // == による比較
    $juce = "コーヒー";
    break;
  case 150:
    $juce = "カルピス";
    break;
  default:
    $juce = "お茶";
}
echo "{$juce}をどうぞ。";
