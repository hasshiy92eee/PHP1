<?php
function h(string $data) {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}
