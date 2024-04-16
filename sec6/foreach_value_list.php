<?php
$namelist = ["赤井一郎", "伊藤五郎", "上野伸二"];
echo "<ol>", PHP_EOL;
foreach ($namelist as $value) {
  echo "<li>", $value, "さん</li>", PHP_EOL;
}
echo "</ol>", PHP_EOL;
/*
<ol>
<li>赤井一郎さん</li>
<li>伊藤五郎さん</li>
<li>上野伸二さん</li>
</ol>
*/