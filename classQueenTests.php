<?php

require_once('assertEquals.php');
require_once('canMoveQueen.php');

function queenTests()
{
//Данные для верных ходов по трем направлениям 
	$coordinate = [4, 5, 2,7];
	echo assertEquals('YES', canMoveQueen($coordinate),'По диагонали: из позиции (4,5) в позицию (2,7)'). PHP_EOL;

	$coordinate = [1, 1, 1, 8];
	echo assertEquals('YES', canMoveQueen($coordinate),'По вертикали: из позиции (1,1) в позицию (1,8)'). PHP_EOL;

	$coordinate = [1, 1, 8, 1];
	echo assertEquals('YES', canMoveQueen($coordinate),'Горизонталь: из позиции (1,1) в позицию (8,1)').PHP_EOL;


// Данные для неверного хода 
	$coordinate = [1, 1, 7, 2];
	echo assertEquals('NO', canMoveQueen($coordinate),'из позиции (1,1) в позицию (7,2)').PHP_EOL;
}
