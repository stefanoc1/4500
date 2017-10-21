<?php 
echo '<pre>';
//var_dump($_REQUEST);

$_GET['nome'] = 'Stefano';
$_POST['nome'] = 'Stefano Cordeiro';
var_dump($_GET);
var_dump($_POST);
//var_dump($_REQUEST);

// url ?chave=valor&chave=valor

session_start();

$_SESSION['logado'] = true;

var_dump($_SESSION);
echo "<hr>";
setcookie("Nome", "Stefano");

var_dump($_COOKIE['Nome']);
echo "<hr>";

var_dump($_SERVER);
echo "<hr>";

var_dump($_ENV);
echo "<hr>";

var_dump($GLOBALS);
echo "<hr>";

//var_dump($_COOKIE['Nome']);
echo "<hr>";