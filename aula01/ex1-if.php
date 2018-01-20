<?php

$nota = 3;
$frequencia = 3;

if ($nota >= 7 && $frequencia >= 8)
{
	echo "APROVADO";
}
else if ($nota >= 5 && $frequencia >= 8)
{
	echo "RECUPERACAO";
}
else if ($nota < 5 || $frequencia < 8) 
{
	echo "REPROVADO";
}



