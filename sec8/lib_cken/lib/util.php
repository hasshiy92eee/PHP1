<?php
function h(string $data): string {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function cken(array|string $data): bool {
  // php7.2からはこれ
  return mb_check_encoding($data, 'UTF-8');
}