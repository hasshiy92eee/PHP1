<?php
$kyori = 20;
$kakudo = 32 * pi() / 180;
$takasa = $kyori * tan($kakudo);
$takasa = round($takasa * 10) / 10;

echo "この高さは{$takasa}mです。";
