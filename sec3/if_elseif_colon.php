<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php $age = 18; ?>
  <?php if ($age <= 15): ?>
    <p>15歳以下の料金は500円です。</p>
  <?php elseif ($age <= 19): ?>
    <p>16歳から19歳は2,000円です。</p>
  <?php else: ?>
    <p>20歳以上の大人は2,500円です。</p>
  <?php endif; ?>
</body>
</html>