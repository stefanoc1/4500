<?php 

echo "<pre>";
// Array Multidimensional
$var[] = '4Linux';
$var[] = 'PHP';

$var[0] = 'Linux';


var_dump($var);

echo "<hr>";

// Array Multidimensional
$pessoa = [
	'nome' => 'Stefano Cordeiro',
	'idade'=> 40,
	'profissao' => 'Consultor'
];

var_dump($pessoa);

echo "<hr>";

// Array Multidimensional
$cursos = [
	'PHP' => ['Iniciante'=> 500, 'Intermediario'=> 501, 'Avancado'=> 502],
	'Linux' => ['Iniciante'=> 450, 'Intermediario'=> 451,  'Avancado'=> 452],
];

$cursos['PHP'] += ['Extra' => 900];
$cursos['PHP']['Iniciante'] = 900;
var_dump($cursos);