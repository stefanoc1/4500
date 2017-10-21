<?php 
echo "<pre>";
/*
$pessoa =
{
	'nome' => 'Stefano Cordeiro',
	'idade' => 40,
	'profissao' => 'Programador'
};

{
	'nome' => 'Stefano Cordeiro',
	'idade' => 40,
	'profissao' => 'Programador'
};


if (array_key_exists('anos', $pessoa))
{
	echo 'Existe a chave idade'
}

print_r($pessoas);
*/

//foreach ($pessoas as $pessoa)
//
//if (array_key_exists('idade', $pessoa))
//{
//	echo 'Existe a chave idade'
//} else {
//	echo 'Nao existe a chave';
//	echo '<br>';
//}

// Funcao array_search

/*foreach ($pessoas as $pessoa) 
{
	$chave = array_search('Stefano Cordeiro', $pessoa);
	echo $chave;
}

$letras = array('a', 'b', 'c');

$chave = array_search('b', $letras);

echo $chave;
*/

// => Funcao: array_unique
/*$estados = ['MG', 'SP', 'RJ', 'SP'];

$estadosUnicos = array_unique($estados);

print_r($estadosUnicos);
print_r($estados);
*/
// => Funcao: in_array

/*
$estados = ['MG', 'SP', 'RJ', 'SP'];
if(in_array('MG', $estados))
{
	echo 'Encontrei MG';
}
*/

// Funcao: Count

$estados = ['MG', 'SP', 'RJ', 'SP'];

$qtdEstados = count($estados);
$qtdPesssoas = count($pessoas);


