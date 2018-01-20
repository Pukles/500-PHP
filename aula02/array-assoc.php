<?php

echo "<pre>";

$pessoa = 
[
'nome' => 'Arthur',
'sobrenome' => 'Puk',
'idade' => 23,
'email' => 'arthurpuk@terra.com.br',
'altura' => 1.70,
];

print_r($pessoa);


echo "<hr>";


echo $pessoa['nome'];


echo "<hr>";


echo $pessoa['nome']."<br>";
echo $pessoa['sobrenome']."<br>";
echo $pessoa['idade']."<br>";


echo "<hr>";


foreach ($pessoa as $key => $value) {
	echo $key , '-->', $value."<br>"
		;
	if (($key == 'idade') && ($value >= 10))
		{ 
			echo "maior idade <br>";
		}
}


echo "<hr>";


foreach ($pessoa as $valores) { 
	echo $valores."<br>";
}





