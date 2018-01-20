<?php


$pessoa = ['nome' => 'Arthur', 'idade' => 23];

function exibeNome() {
	global $pessoa;
	return $pessoa['nome'];

	}

	echo exibeNome();