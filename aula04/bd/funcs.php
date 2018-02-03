<?php

require_once 'conexao.php';

function inserirUsuario(array $dados)
{
	$con = conecta();

	$query = "";

	pg_query($con,$query);

	desconecta($con);
}

function atualizarUsuario(array $dados, int $id)
{
	$con = conecta();

	$query = "";

	$result = pg_query($con,$query);
	
	$found = pg_fetch_all($result);

	desconecta($con);

	return $found;
}

function deletarUsuario(int $id)
{

}

function listarUsuario()
{

}

