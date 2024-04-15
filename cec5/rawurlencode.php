<?php
$word = "dog cat & 猿";
$word = rawurlencode($word);
$url = "http://localhost:3000/receive.php?msg={$word}";
?>
<p><a href="<?php echo $url; ?>">リンク</a></p>
