<?php

echo "<pre>";

$var1 = true;
$var2 = true;

var_dump($var1 and $var2);
echo "<hr>";
$var2 = false;
var_dump($var1 or $var2);
echo "<hr>";
$var1 = false;
var_dump($var1 xor $var2);
echo "<hr>";
$var1 = true;
var_dump($var1 && $var2);
echo "<hr>";
$var1 = false;
var_dump($var1 || $var2);
echo "<hr>";
var_dump(!$var1);
echo "<hr>";
!$var1 = true;
var_dump($var1 || $var2);
echo "<hr>";