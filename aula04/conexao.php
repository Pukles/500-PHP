<?php

$host = 'localhost';
$port = '5432';
$dbname = 'aula04';
$user = 'arthur';
$pass = '123';


echo "<pre>";
$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

var_dump($con_string);

$con = pg_connect($con_string);

var_dump($con);

$usuario = '4Linux';
$senha = '4Linux';

$query = "INSERT INTO usuarios(usuario,senha) values('{$usuario}','{$senha}')";

echo $query;

$result = pg_query($con,$query);

var_dump($result);