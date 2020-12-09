<?php

require_once('readFromConsole.php');
require_once('countingNumsEqualsMax.php');
require_once('assertEquals.php');

function correctTestCountingNumsEqualsMax()
{
	$testNumsArray = '1 2 4 8 16 32 64 !stop';
	echo assertEquals(1, countingNumsEqualsMax(readFromConsole('', $testNumsArray)), 'Количество чисел равных наибольшему: 1').PHP_EOL;
  
	$testNumsArray = '64 64 32 32 16 1 !stop';
	echo assertEquals(2, countingNumsEqualsMax(readFromConsole('', $testNumsArray)), 'Количество чисел равных наибольшему: 2').PHP_EOL;
  
	$testNumsArray = '128 256 128 256 256 1024 1024 1024 1024 !stop';
	echo assertEquals(4, countingNumsEqualsMax(readFromConsole('', $testNumsArray)), 'Количество чисел равных наибольшему: 4').PHP_EOL;
}

correctTestCountingNumsEqualsMax();
