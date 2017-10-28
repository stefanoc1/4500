<?php

echo "<pre>";

$host = "localhost";
$port = "5432";
$dbname = "aula04";
$user = "master";
$password = "123abc";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

$con = pg_connect($connection_string);

var_dump(pg_host($con));

//pg_close($con);

echo "<hr>";

//pg_query("INSERT INTO tb_aluno (nome, email, senha, cpf, rg) VALUES ('Miguel','miguel@email.com', '321cba', '1234567890', '0987654321')");

//pg_query("UPDATE tb_aluno SET dt_nasc = '19800101' WHERE id = 6");

//pg_query("DELETE FROM tb_aluno WHERE id = 5");

/*
$var1 = "Segurança em PHP";
$var2 = "EAD";
$var3 = "22";

pg_query("INSERT INTO tb_curso (nome, tipo, carga_horaria) VALUES ('{$var1}', '{$var2}',
 '{$var3}')");*/

$resultado = pg_query("SELECT * FROM tb_aluno");

var_dump($resultado);

$alunos1 = pg_fetch_all($resultado);
$alunos2 = pg_fetch_array($resultado);
$alunos3 = pg_fetch_assoc($resultado);

var_dump($alunos1);
echo "<hr>";
var_dump($alunos2);
echo "<hr>";
var_dump($alunos3);
echo "<hr>";

/*
foreach ($alunos as $aluno) {
	var_dump ($aluno);
}
*/

while ($row = pg_fetch_assoc($resultado)) {
	var_dump($row);
}