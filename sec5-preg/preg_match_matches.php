<?php
$pattern = "/^佐.+子\r\n/um";
$subject = <<< names
佐藤友子
佐藤ゆう子
塩田智子
杉山香
names;
echo $subject;
$result = preg_match($pattern, $subject, $matches);
if ($result === false) {
  echo "エラー:", preg_last_error();
} else if ($result == 0) {
  echo "マッチした値はありません";
} else {
  echo "「", $matches[0],  "」が見つかりました";
  print_r($matches);
}
