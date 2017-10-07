<?php 

$num1 = '10';
$num2 = '8';
$num3 = 4;
$num4 = 10;

var_dump($num1 == $num3);
echo "<hr>";
var_dump($num1 == $num4);
echo "<hr>";
var_dump($num1 === $num4);
echo "<hr>";
var_dump($num2 > $num3);
echo "<hr>";
var_dump($num1 <> $num4);
echo "<hr>";
var_dump($num1 > $num2);
echo "<hr>";
var_dump($num1 < $num2);
echo "<hr>";
var_dump($num3 > $num4);
echo "<hr>";
var_dump($num3 < $num4);
echo "<hr>";
var_dump($num1 <> $num3);
echo "<hr>";
var_dump($num1 != $num4);
echo "<hr>";
var_dump($num1 >= $num4);
echo "<hr>";
var_dump($num1 <= $num4);
echo "<hr>";