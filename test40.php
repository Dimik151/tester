<?php

// Напишите функцию, которая принимает массив с разными числами, а возвращает массив только с четными числами (порядок тот же).

// Пример входных параметров
// arr = [1, 2, 3, 4, 5]
// Ожидается на выходе
// [2, 4]

$reslut = [1, 2, 3, 4, 5];
foreach ($arr as $val){
    if (($val % 2) == 0){
    $reslut[] = $val;
    }
}
return $reslut;