<?php 

//Condicao Aprovado: Nota >= 7 && (AND) Frequencia >=8

//Condicao Recuperacao: Nota >= 5 && < 70 && (AND)Frequencia >=8

//Condicao Reprovado: Nota < 5 || (OR) Frequencia <8

$nota = 7;
$frequencia = 8;

if ($nota >= 7 && $frequencia >= 8)
	{
		echo "Aprovado!";
	} 
	elseif ($nota >= 5 && $nota <7 && $frequencia >=8)
	{
		echo "Recuperacao!";
	} 
	elseif ($nota < 5 || $frequencia <8)
	{
		echo "Reprovado!";	
	}

 ?>