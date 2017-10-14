<?php 
echo "<pre>";
$cursos = [
	'PHP' => [
		'Iniciante'=> 500,
		'Intermediario'=> 501,
		'Avancado'=> 502],
	'Linux' => [
		'Iniciante'=> 450,
		'Intermediario'=> 451,
		'Avancado'=> 452],
];

foreach ($cursos as $tipo => $curso) {
var_dump($tipo);
var_dump($curso['Iniciante']);
}

echo "<hr>";

$pessoas = [
	[
	'nome' => 'Stefano Cordeiro',
	'idade'=> 40,
	'profissao' => 'Consultor'
	'cursos' => ['PHP', 'Financas']
	],
	[
	'nome' => 'Stenio Cordeiro',
	'idade'=> 40,
	'profissao' => 'Analista de Seguranca'
	'cursos' => ['Linux','Seguranca']
	],	
	[
	'nome' => 'Marcelo Marques',
	'idade'=> 36,
	'profissao' => 'Consultor'
	'cursos' => ['Gestao', 'Financas']
	],	
];

foreach ($pessoas as $pessoa) {

	foreach ($pessoas['cursos'] as $curso){

		if ($curso == 'PHP'){
			echo $pessoa['Nome'];
			echo "<Br>";
		}
	}
//var_dump($pessoa);
//var_dump($pessoas['Consultor']);
}
