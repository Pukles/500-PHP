<?php

echo "<pre>";

$artilheiro = "Ronaldo";
$gols = 9;
$texto = 'O artilheiro do campeonato, %s tem %d gols';
printf($texto,$artilheiro,$gols);




echo "<hr>";
$msg = sprintf($texto, $artilheiro, $gols);
echo $msg;




echo "<hr>";
$texto = 'Olá mundo';
echo str_replace('Olá', 'Tchau', $texto);




echo "<hr>";
$msg = 'Olá';
echo str_replace('á', 'a', $msg);




echo "<hr>";
$pessoa = ['nome' => 'Maria' , 'sexo' => 'f'];
$msg = "olá menino $pessoa[nome]";
if ($pessoa['sexo'] == 'f') 
{
 str_replace('menino', 'menina', $msg);
}

echo $msg;




echo "<hr>";
$string = '            PHP          ';
var_dump($string);
var_dump(trim($string));




echo "<hr>";
$string = 'ola mundo';
echo ucfirst($string);





echo "<hr>";
$string = 'ola mundo';
echo ucwords($string);




echo "<hr>";
$string = 'Ola Mundo';
echo lcfirst($string);




echo "<hr>";
$email = 'linus@linux.org';
$dominio = strstr($email, '@');
echo $dominio;




echo "<br>";
$user = strstr($email, '@' , true);
echo $user;




echo "<hr>";
$string = 'Olá mundo!';
echo strlen($string);




echo "<hr>";
$string = '    Olá mundo!        ';
echo strlen(trim($string));




echo "<hr>";
$string = "123456789";
$procurar = "5";

$pos = strpos($string, $procurar);
var_dump($pos);




echo "<hr>";
$string = '0123456789';
echo substr($string, 2);
echo "<br>";
echo substr($string, 2,-3);




echo "<hr>";
$string = 'Hoje eu acordei cedo.';
echo substr_replace($string, 'tarde', -5,-1);




echo "<hr>";
$string = "Olá mundo";
echo strtoupper($string);





echo "<hr>";
$string = "OLA MUNDO";
echo strtolower($string);




echo "<hr>";
$string = 'JOSE MARIA';
echo ucwords(strtolower($string));