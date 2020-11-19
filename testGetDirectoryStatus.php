<?php

require_once 'getDirectoryStatus.php';

//Cоздаем тестируемые файл и папку в нашей директории
file_put_contents('test_file_1.txt', 'COVID-19 go home! We are not love you!');
mkdir('test_dir_1');

//Задаем результат, в случае которого тест будет пройден
$expected = [
	'directory' => [
		'test_dir_1' =>[
			'is_readable' => 'true',
			'is_writable' => 'true'
		]
	],
	'files' => [
		'test_file_1.txt' =>[
			'is_readable' => 'true',
			'is_writable' => 'true',
			'file size' => '12'
		]
	],
];

//Вызываем функцию, показывающую информацию о текущей директории
$dir = '.';
$obtained = getDirectoryStatus($dir);

// Сравниваем полученные и ожидаемые результаты
$test = array_diff($expected, $obtained);

// Если различий в результатах нет, тест пройден, иначе не пройден
if (empty($test))
	{
		echo ('test passed');
	}
else
	{
		echo ('test filed');
	}

// Удаляем временные тестовые файлы и папки из директории, которую мы проверяли
unlink ('test_file_1.txt');
rmdir ('test_dir_1');
