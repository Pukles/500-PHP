<?php

$host = 'localhost';
$port = '5432';
$dbname = 'aula04';
$user = 'arthur';
$pass = '123';


echo "<pre>";
$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

function conecta(){
	global $con_string;
	return pg_connect($con_string);
}
function desconecta($con){
	
}

var_dump($con_string);

$con = pg_connect($con_string);