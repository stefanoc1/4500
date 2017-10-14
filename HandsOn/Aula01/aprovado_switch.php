<?php 

//Condicao Aprovado: Nota >= 7 && (AND) Frequencia >=8

//Condicao Recuperacao: Nota >= 5 && < 70 && (AND)Frequencia >=8

//Condicao Reprovado: Nota < 5 || (OR) Frequencia <8

$nota = 7;
$frequencia = 8;

switch (true) 
{
	case ($nota >= 7 && $frequencia >= 8):
		echo "Aprovado!";
		break;

	case ($nota >= 5 && $nota <7 && $frequencia >=8):
		echo "Recuperacao!";
		break;

	case ($nota >= 7 || $frequencia >= 8):
		echo "Reprovado!";	
		break;

	default:
		#code
		break;
}



