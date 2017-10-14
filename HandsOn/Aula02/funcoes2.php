<?php 
echo "<pre>";
//Funcao gerar aleatorio

$num = 11;

function gerarAleatorio($tam = 5, $num1 = 0, $num2 = 10)
	{
	for ($i=0; $i < $tam; $i++)
	{
		$numeros[] = mt_rand(0,10);
	}
	return $numeros;
}

$array1 = gerarAleatorio(3,5,15);
$array2 = gerarAleatorio(3,16,30);

var_dump($array1);
var_dump($array2);
echo "<hr>";

// Apenas os numeros pares, separados por virgula
function isPar($array)
	{
	foreach ($array as $key => $value)
	{
		if ($value % 2 == 0)
			{
				$pares[] = $value;
			}
	}
	return $pares;
}

$array = gerarAleatorio(5);
var_dump($array);
$arrayPares = isPar($array);
var_dump($arrayPares);
echo "<hr>";

// Apenas os numeros pares, separados por virgula
$numeros = gerarAleatorio(5);
$var_dump($numeros);
$impares = array_filter($numeros, function($valor)
	{
		if ($valor == 1)
			{
				return $valor;
			}
	});

var_dump($impares);

echo "<hr>";

$nomes = ['Stefano', 'Chris', 'Arthur'];

$encontrado = array_filter($nomes, function($nome)
	{
		if ($nome == 'Stefano')
			{
				return $nome;
			}
	});

var_dump($encontrado);