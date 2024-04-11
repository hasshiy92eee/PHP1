<?php
$kyori = 20;
$kakudo = 32 * pi()/180;   // 32度のラジアン値
$takasa = $kyori * tan($kakudo);
// $takasa = round($takasa * 10) / 10;
$takasa = round($takasa, 2);

echo "木の高さは{$takasa}mです。";
// 木の高さは12.5mです。
