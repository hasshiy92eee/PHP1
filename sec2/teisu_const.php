<?php
const TAX = 0.08;
$price = 1250 * (1 + TAX);
echo $price;

define("PPP", $price);
echo PPP;

// const PPP = $price;
// echo PPP;




 /*
define ("PRICE", $price);
*/

// echo PRICE;