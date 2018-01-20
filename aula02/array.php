<?php

echo "<pre>";

$nome = "Arthur";
$sobrenome = "Puk";
$idade = 23;
$email = "arthurpuk@terra.com.br";


$pessoa = array('Arthur','Puk',23,'arthurpuk@terra.com.br');
$pessoa[] = 1.70;


$pessoa2 = ['João','da Silva',86,'joao@terra.com.br'];

print_r($pessoa);


echo "<hr>";


print_r($pessoa[3]);


echo "<hr>";


echo ($pessoa[2]);


echo "<hr>";


echo ($pessoa[0])."<br>";
echo ($pessoa[1])."<br>";
echo ($pessoa[2])."<br>";
echo ($pessoa[3])."<br>";


