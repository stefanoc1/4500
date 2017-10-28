<?php 


function verificaPagina($pagina)
{
	if((basename($_SERVER['PHP_SELF']) == $pagina))
	{
		return true;
	} else {
		return false;
	}
}

function validaCampo($campo){
	if ($campo == '') {
		return false;
	}
	return true;
}

function validaCampos($dados){
	foreach ($dados as $chave => $valor) {
		if ($valor == '') 
			$chave;
		}
	}
	if ($campo == '') {
		return false;
	}
	return true;
}

/*
if(isset($_POST['nome'])){
	echo $_POST['nome'];
} else {
	echo '';
}
*/
