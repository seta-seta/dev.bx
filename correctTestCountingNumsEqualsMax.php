<?php

require_once('readFromConsole.php');
require_once('countingNumsEqualsMax.php');
require_once('assertEquals.php');

function correctTestCountingNumsEqualsMax()
{
  $testNumsArray = '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 !stop';
	echo assertEquals(0, countingNumsEqualsMax(readFromConsole('',$testNumsArray)), 'Передано больше чем 20 чисел').PHP_EOL.PHP_EOL;

	$testNumsArray = '';
	echo assertEquals(0, countingNumsEqualsMax(readFromConsole('',$testNumsArray)), 'Последовательность не передана').PHP_EOL;
  
	$testNumsArray = '!stop';
	echo assertEquals(0, countingNumsEqualsMax(readFromConsole('',$testArray)), 'Передано только ключевое слово !stop').PHP_EOL;
  
  $testNumsArray = '1 2 3 false !stop';
	echo assertEquals(0, countingNumsEqualsMax(readFromConsole('',$testNumsArray)), 'В последовательсности передано не число').PHP_EOL;
	
  $testNumsArray = '1 2 3 4 5';
	echo assertEquals(0, countingNumsEqualsMax(readFromConsole('',$testNumsArray)), 'Не указано слово "!stop"').PHP_EOL;
	
  $testNumsArray = '1 2 3 4.5 !stop';
	echo assertEquals(0, countingNumsEqualsMax(readFromConsole('',$testNumsArray)), 'Передано не целое число').PHP_EOL;
	
  $testNumsArray = '1 2 3 -4 !stop';
	echo assertEquals(0, countingNumsEqualsMax(readFromConsole('',$testNumsArray)), 'Передано отрицательное число').PHP_EOL;
}

correctTestCountingNumsEqualsMax();
