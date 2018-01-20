<?php

$num = 0;


function add(&$num){
	return $num ++;

}

add($num);

echo $num;