<?php

$idade = 20;
$temHabilitacao = false;

if ($idade >= 18 && $temHabilitacao) 
{
	echo "Pode dirigir.";
} 
else if ($idade >= 18 && !$temHabilitacao)
{
	echo "Nao pode dirigir, mas pode se habilitar.";
}
else
{
	"Nao pode dirigir e nem se habilitar.";
}





