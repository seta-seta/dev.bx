<?php

require_once('classQueen.php');
require_once('readFromConsole.php');

function canMoveQueen(array ($coordinates = null))
{
	// Ввод координат с консоли
	if ($coordinates == null)
	{
		$coordinates = readFromConsole("Введите координаты текущего положения королевы (номер столбца, номер строки) и положения на которое хотите передвинуть фигуру". PHP.EOL);
		$coordinates = explode(' ', $coordinates);
		$coordinates = array_map(function($num){return (int)$num;}, $coordinates); // функция возвращает массив с координатами
	}

	// проверка на правильность ввода координат
	if (count($coordinates) !== 4)
	{
		return ('Введено не верное количество координат, повторите ввод'. PHP_EOL);
	}
  
  // проверка введенных координат 
	foreach ($coordinates as $num)
	{
		if($num <=0 || $num > 8)
		{
			return ('Не верно введены координаты, повторите ввод'. PHP_EOL);
		}
	}

	// передвижение фигуры при помощи класса Королева
	$queen = new Queen($coordinates[0], $coordinates[1], '');
	return $queen->queenCanMove($coordinates[2], $coordinates[3]);
}
