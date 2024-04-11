<?php
$b = 10;
try {
  $a = $b / 0;
  // $a = intdiv($b, 0);
  echo $a;
} catch (DivisionByZeroError $e) {
  echo $e->getMessage();
}
