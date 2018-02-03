<?php

require_once 'conexao.php';

$usuario = 'Lucas';
$id = '2';

$query = "UPDATE usuario SET usuario = '{$usuario}' WHERE id = {$id}";

// echo $query;

$result = pg_query($query);

var_dump($result);