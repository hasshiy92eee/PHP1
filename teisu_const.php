<?php
const TAX = 0.08;
$price = 1250 * (1 + TAX);
echo $price;
echo '<br>';
define("PPP", $price);
echo PPP;
