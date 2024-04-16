<?php
$pattern = "/^(090|080|070)(-?[0-9]{4}){2}$/u";
var_dump(preg_match($pattern, "a090-1234-5678")); // 1
var_dump(preg_match($pattern, "080-1234-5678")); // 1
var_dump(preg_match($pattern, "07012345678")); // 1
var_dump(preg_match($pattern, "12345678")); // 0