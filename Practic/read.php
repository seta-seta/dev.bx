<?php

function readFromConsole(string $question)
{
	echo $question.': ';
	$input = trim(fgets(STDIN));

	if ($input === 'true' || $input === 'false')
	{
		$input = (bool)$input;
	}

	else if (is_numeric($input))
	{
		$input = +$input;
	}

	else
	{
		$input = (string)$input;
	}

	return $input;
}