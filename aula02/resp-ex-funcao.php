
<?php

echo "<pre>";


function isParOuImpar($num) {
	return ($num % 2 === 0 ) ? 'par' : 'impar';
	}

echo isParOuImpar(10);
echo "<br>";


echo "<hr>";



function maiorIdade($pessoa) {
	return ($pessoa['idade'] >= 18) ? 'Maior de idade' : 'Menor de idade';
	}

echo maiorIdade(23);


