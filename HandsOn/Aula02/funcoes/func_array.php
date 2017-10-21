<?php 
echo "<pre>";
// Funcao array_map
function cubo($num)
{
	return $num*$num*$num;
}

$a = array(1,2,3,4,5);
$b = array_map ('cubo', $a);

var_dump($b);

echo "<hr>";

// Funcao array_filter
function par($num)
{
	if ($num % 2 == 0)
		{
			return $num;
		}
}

function impar($num)
{
	if ($num % 2 != 0)
		{
			return $num;
		}
}
$vetor = [6,7,8,9,10,12,13];

echo "Impares: \n";
print_r(array_filter($vetor, 'impar'));
echo "Pares: \n";
print_r(array_filter($vetor, 'par'));

echo "<hr>";

// Funcao array_chunk

$vetor = [6,7,8,9,10,12,13];

print_r(array_chunk($vetor, 3));

echo "<hr>";

$chaves = array(1,2,3);
$valores = array ('um','dois','tres');

$vetor = array_combine($valores, $chaves);
print_r($vetor);

echo "<hr>";

// Funcao array_diff

$num1 = [1,2,3,4,5,6];
$num2 = [3,2,4];

$diff = array_diff($num1, $num2);

print_r($diff);

echo "<hr>";

// Funcao array_merge

$array1 = ['a','b', 'cor' => 'verde'];
print_r($array1);
$array2 = ['cor' => 'azul', 'd', 'xadrez'];
print_r($array2);
print_r(array_merge($array1,$array2));

echo "<hr>";
// Funcao array_fill

$vetor = array_fill(8, 10, 'PHP');
print_r($vetor);
