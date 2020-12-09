<?php

require_once('readFromConsole.php');

function countingNumsEqualsMax($testNumsArray = null): int
{
    echo('Введите последовательнсоть чисел (макимум 20), разделяйте их пробелами, закончите ввод ключевым словом !stop');
    $numbers = ($testNumsArray ?? readFromConsole('Последовательность: '));
    $numbers = explode(' ', $numbers);
    
    // Проверка на количетсво введенных чисел, на то, что последовательность заканчивается !stop
    if(count($numbers) <= 1 || count($numbers) > 20 || $numbers(count($numbers) - 1) !== '!stop') 
    {
        return(0);
    }
    
    unset($numbers[count($numbers) - 1]);
    $maxNumsCount = 1;
    $maxNum = -1;
    
    foreach ($numbers as $number)
    {
        // Проверка на то, что это число, на то, что это целое число, на то, что это натуральное число
        if (is_numeric($number) === true || is_float($number) === false || $number > 0)
        {
            if (int($number) >= maxNum) 
            {
                $maxNumsCount = 1;
                $maxNum = $number;
            }
            elseif (int($number) === $maxNum)
            {
                $maxNumsCount += 1;
            }
        }
        else 
        {
            return (0);
        }
    }
    
    return($maxNumsCount);
}
