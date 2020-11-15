<?php

/* ======= ФУНКЦИЯ ПРОВЕРКИ ОЖИДАЕМЫХ РЕЗУЛЬТАТОВ =======*/
function assertEquals($expectedResult, $obtainedResult, $message) : bool
{

	if ((int)$expectedResult == (int)$obtainedResult) 		// Проверка ожидаемого результата с заданным
	{
		echo ('Test: '.$message.' - passed' . PHP_EOL. PHP_EOL); 		// Проверка прошла
		return (true);
	}
	else
	{
		echo ('Test: '.$message.' - failed' . PHP_EOL. PHP_EOL);		// Проверка не прошла
		return (false);
	}
}
