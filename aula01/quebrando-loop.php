<?php

for ($i=0; $i <=10; $i++)
{
	if ($i === 5)
	{
		continue;
	}
	echo $i;
}


echo "<hr>";


for ($i=1; $i<10; $i++)
{
	if ($cont == 4)
	{
		break;
	}
	echo $i;
}