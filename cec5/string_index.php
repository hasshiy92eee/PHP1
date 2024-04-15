<?php
$id = "Peace";
$length = strlen($id);
for ($i = 0; $i < $length; $i++) {
  $chr = $id[$i];
  echo "{$i}-", $chr, PHP_EOL;
}
/*
0-P
1-e
2-a
3-c
4-e
*/
