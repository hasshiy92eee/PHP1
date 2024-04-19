<?php
require_once('lib/util.php');
$utf8_string = "こんにちは";
$sjis_string = mb_convert_encoding($utf8_string, 'Shift_JIS');
if (cken($sjis_string)) {
  echo "配列の値は utf-8 です。";
} else {
  echo "配列の値は utf-8 ではありません。";
}