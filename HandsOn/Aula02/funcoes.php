<?php 

echo "<pre>";

$num = 11;

function isParOrImpar($num)
{
if ($num % 2 == 0)
	{
		return "PAR";
	} else {
		return "IMPAR";		
	}	
}

function isMaior($num1, $num2)
{
$maior;
if ($num1 > $num2)
	{
		$maior = $num1;
	} else  if ($num1 > $num2) {
		$maior = $num2;		
	} else {
		$maior = 'Iguais';		
	}		
	return $maior;
}

echo isParOrImpar($num);
echo "<br>";
echo $num;
echo "<hr>";
echo isMaior(10,10);
 ?>