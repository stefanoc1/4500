<?php 
echo "<pre>";
//Funcao empty
// 0, "0", FALSE, NULL -> Sao consideradas vazias;

$var = 0;

if (empty($var))
{
	echo 'VAZIO';
}

echo "<hr>";
echo "<hr>";
//Funcao isset
//Valida de a variavel existe ou nao

if (isset($var))
{
	echo 'setada';
} 
echo "<hr>";
if (isset($nome))
{
	echo 'nao setada';
} 
echo "<hr>";

if (!isset($nomes))
{
	echo 'nao setada - negacao';
} 
echo "<hr>";
//Funcao is_string
//Valida de a variavel existe ou nao

$string = 'Texto aqui';

if (is_string($string))
{
	echo 'E uma string';
}
echo "<hr>";

//Funcao unset
//Deleta a variavel da memoria

$variavel = 'Texto';
var_dump($variavel);
unset($variavel);
var_dump($variavel);

echo "<hr>";
//Funcao printf
//Formata a string de acordo com especifcacao definida

$artilheiro = 'Ronaldo';
$gols = 19;

$formato = 'O artilheiro do brasileirao, %s, tem %d gols.';
printf($formato, $artilheiro, $gols);

echo "<hr>";
//Funcao str_replace
//Substitui a string por outra

$string = 'Oi mundo';
$novaString = str_replace('Oi', 'Tchau', $string);

echo $novaString;

echo "<hr>";
//Funcao trim
//Remove espacos em branco

$string = '                  PHP';
var_dump($string);
var_dump(trim($string));

echo "<hr>";
//Funcao lcfirst
//Remove espacos em branco

$string = 'OI MUNDO';
echo lcfirst($string);

echo "<hr>";
//Funcao ucword
//Remove espacos em branco

$string = 'oi mundo';
echo  ucwords($string);

$novaString;

//Funcao ucfirst
//Remove espacos em branco

$string = 'oi mundo';
echo ucfirst($string);

echo "<hr>";
//Funcao str_split
//Remove espacos em branco

$string = 'Ola, tudo bem?';
$array =  str_split($string,3);
var_dump($array);

echo "<hr>";
//Funcao explode
//Remove espacos em branco

$nomes = 'Stefano, Chris, Arthur';
$nomes = explode(',', $nomes);

var_dump($nomes);

echo "<hr>";
//Funcao implode
//Remove espacos em branco

$nomes = array('Stefano', 'Chris', 'Arthur');
$nomes = implode(',', $nomes);

var_dump($nomes);

echo "<hr>";
//Funcao str_repeat
//Remove espacos em branco

echo str_repeat('@', 10);

echo "<hr>";
//Funcao str_pad
//Remove espacos em branco

$texto = 'Star Wars';
var_dump (str_pad($texto, 20));
var_dump (str_pad($texto, 20, '@'));
var_dump (str_pad($texto, 20, '@', STR_PAD_LEFT));
var_dump (str_pad($texto, 20, '@', STR_PAD_BOTH));

echo "<hr>";
//Funcao str_str
//Remove espacos em branco

$email = 'linux@linux.org';
$dominio = strstr ($email, '@');
echo $dominio;
echo "<hr>";
$user = strstr ($email, '@', true);
echo $user;

echo "<hr>";
//Funcao strlen
//Remove espacos em branco

$string = '   Stefano Cordeiro de Paula   ';
echo strlen($string);
echo "<hr>";
echo strlen(trim($string));

echo "<hr>";
//Funcao strpos
//Remove espacos em branco

$string = '0123456789';
$procurar = '3';

$pos = strpos($string, $procurar);

if ($pos === false)
{
	echo "A string $procurar nao foi encontrada;";
} else {
	echo "A string $procurar foi encontrada na posicao $pos;";	
}

echo "<hr>";
//Funcao strrpos
//Remove espacos em branco

$string = '01234567890123456789';
$procurar = '0';

$pos = strrpos($string, $procurar);

if ($pos == false)
{
	echo "A string $procurar nao foi encontrada na string $string;";
} else {
	echo "A string $procurar foi encontrada na string $string;";
	echo "e existe na posicao $pos;";	
}

echo "<hr>";
//Funcao strripos
//Remove espacos em branco

$string = 'abcdeABCDEabcdeABCDE';
$procurar = 'a';

$pos = strripos($string, $procurar);

if ($pos === false)
{
	echo "A string $procurar nao foi encontrada na string $string;";
} else {
	echo "A string $procurar foi encontrada na string $string;";
	echo "e existe na posicao $pos;";	
}

echo "<hr>";
//Funcao stripos
//Remove espacos em branco

$string = 'abcdeABCDEabcdeABCDE';
$procurar = 'a';

$pos = stripos($string, $procurar);

if ($pos === false)
{
	echo "A string $procurar nao foi encontrada na string $string;";
} else {
	echo "A string $procurar foi encontrada na string $string;";
	echo "e existe na posicao $pos;";	
}

echo "<hr>";
//Funcao substr
//Remove espacos em branco

$string = substr("0123456789", 0, -1);
echo $string;


echo "<hr>";
//Funcao str_replace e substr_replace
//Remove espacos em branco

$string = 'Hoje acordei muito cedo.';
echo str_replace('cedo', 'tarde', $string);
echo "<br>";
echo substr_replace($string, 'tarde', -5, -1);
echo "<br>";
echo substr_replace($string, 'tarde', 5);

echo "<hr>";
//Funcao strtolower
//Remove espacos em branco

$string = 'HOJE ACORDEI MUITO CEDO.';
echo strtolower($string);

echo "<hr>";
//Funcao strtoupper
//Remove espacos em branco

$string = 'hoje acordei muito cedo.';
echo strtoupper($string);
