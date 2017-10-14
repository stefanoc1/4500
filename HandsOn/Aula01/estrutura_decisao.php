<?php 

echo "<pre>";

$idade = 40;

if ($idade >= 18) 
{
	echo $idade;
} else {
	echo "Menor de idade";
}
echo "<hr>";
//Estrutura ternaria
echo ($idade >= 18) ? $idade : "Menor de idade";
 ?>