<?php

require_once 'conexao.php';

$usuario = 'arthur';
$senha = '123';

$query = "INSERT INTO usuarios(usuario,senha) values('{$usuario}','{$senha}')";

// echo $query;

$result = pg_query($query);

var_dump($result);