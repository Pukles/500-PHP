<?php

require_once 'conexao.php';


$id = '2';

$query = "DELETE FROM usuarios WHERE id = {$id}; ";

// echo $query;

$result = pg_query($query);

var_dump($result);