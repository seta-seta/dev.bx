<?php

function getDirectoryStatus($dir)

{	$currentDir = opendir($dir);
	$dirElem = [
		'directory' => [],
		'files' => [],
	];
	while ($element = readdir($currentDir))
	{
		if (in_array($element, ['.', '..', 'getDirectoryStatus.php', 'testGetDirectoryStatus.php']))
		{
			continue;
		}
		$elementIsReadable = 'false';
		$elementIsWritable = 'false';
		if (is_dir($element))
		{
			$elementName = $element;
			if (is_readable($element))
			{
				$elementIsReadable = 'true';
			}
			if (is_writable($element))
			{
				$elementIsWritable = 'true';
			}
			$dirElem['directory'][$elementName] = ['is_readable' => $elementIsReadable, 'is_writable' => $elementIsWritable];
		}
		else
		{
			$elementName = $element;
			$elementSize = filesize($element);
			if (is_readable($element))
			{
				$elementIsReadable = 'true';
			}
			if (is_writable($element))
			{
				$elementIsWritable = 'true';
			}
			$dirElem['files'][$elementName] = ['is_readable' => $elementIsReadable, 'is_writable' => $elementIsWritable, 'file size' => $elementSize];
		}
	}
	closedir($currentDir);
	return ($dirElem);
}
