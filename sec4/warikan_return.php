<?php
/**
 * 割り勘の金額を表示する
 * $total -- 合計金額
 * $ninzu -- 人数
 * return なし
 */
function warikan($total, $ninzu) {
  if ($ninzu <= 0) {
    return;
  }
  $result = $total / $ninzu;
  echo "{$total}を{$ninzu}で分けると{$result}円。";
  echo "<br>" . PHP_EOL;
}
warikan(2500, 2);  // 2500を2で分けると1250円。<br>
warikan(3000, 0);   
warikan(5500, 4);  // 5500を4で分けると1375円。<br>

