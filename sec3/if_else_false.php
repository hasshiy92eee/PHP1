<?php
$tokuten = 45;
if ($tokuten >= 80) {
  echo "素晴らしい";
} else {
  echo "もう少しがんばりましょう";
}
// echo "{$tokuten}点でした";

$k = ($tokuten >= 80) ? "すばら" : "もうす";
echo $k;
