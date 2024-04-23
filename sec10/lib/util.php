<?php
function h(string $data): string {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function cken(array|string $data): bool {
  // php7.2からはこれ
  return mb_check_encoding($data, 'UTF-8');
}
function cken_check($data) {
  if (!cken($data)) {
    $err = "Encoding Error! The expected encoding is UTF-8";
    exit($err);
  }
}

function print_error(array $errors) {
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo '<li>', $value, '</li>';
  }
  echo '</ol>';
}

function moveBtn($path, $msg) {
  ?>
  <form method="post" action="<?= $path; ?>">
    <ul>
      <li><input type="submit" value="<?= $msg; ?>"></li>
    </ul>
  </form>
  <?php
}