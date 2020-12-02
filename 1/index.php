<?php
$numbers = explode("\n",file_get_contents('input.txt'));

for($k=0;$k<count($numbers);$k++)
{
	$first_input = $numbers[$k];
	for($j=0;$j<count($numbers);$j++)
	{
		$second_input = $numbers[$j];
		if ($first_input+$second_input == 2020)
		{
			echo $first_input*$second_input;
			return;
		}
	}
}