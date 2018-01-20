<?php

echo "<pre>";

$pessoas = [
[
'nome' => 'Arthur',
'sobrenome' => 'Puk',
'idade' => 23,
'email' => 'arthurpuk@terra.com.br',
'altura' => 1.70,
],

[
'nome' => 'Joao',
'sobrenome' => 'Sousa',
'idade' => 50,
'email' => 'joao@terra.com.br',
'altura' => 1.80,
],
 
[
'nome' => 'Maria',
'sobrenome' => 'Lopes',
'idade' => 60,
'email' => 'maria@terra.com.br',
'altura' => 1.60,
]
];

echo "<pre>";
//print_r($pessoas);


foreach ($pessoas as $pessoa) {
	echo "$pessoa[nome] $pessoa[sobrenome]";
	echo "<hr>";
	echo "<pre>";
	}



foreach ($pessoas as $pessoa) {
	if ($pessoa['idade'] >= 30){
	echo "$pessoa[nome] $pessoa[sobrenome]";
	echo "<hr>";
	}

	}


	foreach ($pessoas as $pessoa) {
	if ($pessoa['altura'] >= 1.65){
	echo "Nome completo: $pessoa[nome] $pessoa[sobrenome] - Altura: $pessoa[altura]";
	echo "<hr>";
	}
	}


foreach ($pessoas as $pessoa) {
	if ($pessoa['idade'] >= 15){
	echo "Nome completo: $pessoa[nome] $pessoa[sobrenome] - Idade: $pessoa[idade]";
	echo "<hr>";
	}
	}