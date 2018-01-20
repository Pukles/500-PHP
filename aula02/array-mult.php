<?php

echo "<pre>";

$temperaturas = array (

'2008' => array(
		'Janeiro' => 32,
		'Fevereiro' => 31,
),

'2009' => array(
		'Janeiro' => 32,
		'Fevereiro' => 31,
),

'2010' => array(
		'Janeiro' => 32,
		'Fevereiro' => 31,
),

);


//print_r($temperaturas);

foreach ($temperaturas as $ano => $meses) {
	echo "<strong>$ano</strong>: <br>";

foreach ($meses as $mes => $temp) {
	echo "$mes: $temp graus <br>";
}

}