<?php

$nota = 5;
$frequencia = 8;

switch (true)
{

	case ($nota >= 7 && $frequencia >= 8);
	echo "APROVADO";
	break;

	case ($nota >= 5 && $frequencia >= 8);
	echo "RECUPERACAO";
	break;

default;
echo "REPROVADO";
break;

}
