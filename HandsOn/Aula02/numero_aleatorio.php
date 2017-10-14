<?php 

/*Gerando numero aleatorio enre 0 e 10; $numero = mt_rand(0,10);

- Todos os numeros, separados por virgula
- O primeiro numero do array
- O ultimo numero do array

*/

echo "<pre>";

$tamanhoArray = 10;
$numeros = array();

for ($i=0; $i < $tamanhoArray; $i++)
{
	$numeros[] = mt_rand(0,10);
	echo $i;
	echo "<br>";
	
}
var_dump($numeros);
// Todos os numeros, separados por virgula
	echo "<hr>";
	echo 'Todos os numeros, separados por virgula';
	echo "<br>";
for ($i=0; $i < $tamanhoArray; $i++)
{
	$numeros[] = mt_rand(0,10);
	echo $numeros[$i] . ',';
}
// Uso do foreach
	echo "<hr>";
	echo 'O primeiro numero do array';
	echo "<br>";

foreach ($numeros as $chave => $valor)
{
	echo $chave . '=' .$valor . ',';
}

// Apenas os numeros pares, separados por virgula	
echo "<hr>";
echo 'Apenas os numeros pares, separados por virgula';
echo "<br>";

for ($i=0; $i < $tamanhoArray; $i++)
	{
		if ($numeros[$i] % 2 == 0)
		{
			echo $numeros[$i] . ',';
		}	
	}
// Apenas os numeros impares, separados por virgula	
echo "<hr>";
echo 'Apenas os numeros impares, separados por virgula';
echo "<br>";

foreach ($numeros as $key => $value)
	{
		if ($value % 2 != 0)
		{
			echo $value . ',';
		}	
	}

// Maior numero	
echo "<hr>";
echo 'Maior numero';
echo "<br>";
$maior = $numeros[0];
for ($i=0; $i < $tamanhoArray; $i++)
	{
		if ($numeros[$i] > $maior)
		{
			$maior = $numeros[$i];
		}	
	}
echo $maior;

// Menor numero	
echo "<hr>";
echo 'Menor numero';
echo "<br>";
$menor = $numeros[0];
for ($i=0; $i < $tamanhoArray; $i++)
	{
$menor = $numeros[0];
		if ($numeros[$i] < $maior)
		{
$menor = $numeros[0];
			$maior = $numeros[$i];
		}	
	}
$menor = $numeros[0];
echo $maior;


// Array em ordem crescente
echo "<hr>";
echo 'Array em ordem crescente';
echo "<br>";
for ($i=0; $i < $tamanhoArray; $i++) {
	for ($j= $i+1; $j < $tamanhoArray; $j++) { 
			
		if ($numeros[$i] > $numeros[$j]) {
			$temp = $numeros[$i];
			$numeros[$i] = $numeros[$j];
			$numeros[$j] = $temp;
		}
	}	
}

// TODOS
foreach ($numeros as $numero) {
	echo $numero . ",";
}

echo "<hr>";

sort($numeros);
foreach ($numeros as $numero) {
	echo $numero . ",";
}

// Array em ordem decrescente	
echo "<hr>";
echo 'Array em ordem decrescente';
echo "<br>";

for ($i=0; $i < $tamanhoArray; $i++) {
	for ($j= $i+1; $j < $tamanhoArray; $j++) { 
			
		if ($numeros[$i] < $numeros[$j]) {
			$temp = $numeros[$i];
			$numeros[$i] = $numeros[$j];
			$numeros[$j] = $temp;
		}
	}	
}

// TODOS
foreach ($numeros as $numero) {
	echo $numero . ",";
}

echo "<hr>";

sort($numeros);
foreach ($numeros as $numero) {
	echo $numero . ",";
}


