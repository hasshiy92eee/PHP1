<?php
function check($target, $str) {
  $result = mb_strpos($target, $str);
  if ($result === false) {
    echo "{$str} は {$target} には含まれていません" . PHP_EOL;
  } else {
    echo "{$str} は {$target} の " . ($result + 1) . "文字目にあります" . PHP_EOL;
  }
}
check("東京都渋谷区神南", "渋谷");  // 渋谷 は 東京都渋谷区神南 の 4文字目にあります
check("東京都渋谷区神南", "新宿");  // 新宿 は 東京都渋谷区神南 には含まれていません
check("PHP, Swift, C++", "PHP");    // PHP は PHP, Swift, C++ の 1文字目にあります
check("PHP, Swift, C++", "Python"); // Python は PHP, Swift, C++ には含まれていません
