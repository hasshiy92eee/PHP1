<?php
$data = ["ID"=>"TR123", "商品名"=>"ピークハント", "価格"=>14500];
echo "<ul>", PHP_EOL;
foreach ($data as $key => $value) {
  echo "<li>{$key}: {$value}</li>", PHP_EOL;
}
echo "</ul>", PHP_EOL;
/*
<ul>
<li>ID: TR123</li>
<li>商品名: ピークハント</li>
<li>価格: 14500</li>
</ul>
*/
