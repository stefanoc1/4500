<?php 

include_once '';

function verificaUsuario($dados){
	if(!isset($dados['email'])) {
		return false;
	}
	if(!isset($dados['senha'])) {
	return false;
	}
	
	foreach ($usuarios as $usuario) {
		if ($dados['email'] == $usuario['email']) && $dados['senha'] == $usuario['senha']){
			echo 'Logado com sucesso!';
		} else {
			echo 'Logado com sucesso!';
	}