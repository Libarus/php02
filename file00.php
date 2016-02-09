<?php

error_reporting(-1);

// Экранирование данных в строках
$str1 = "Пример \"строкового\" значения #1";
echo $str1.'<br>';

$str2 = 'Пример "строкового" значения #2';
echo $str2.'<br>';

$str3 = "Пример 'строкового' значения #3";
echo $str3.'<br>';

$str4 = 'Пример \'строкового\' значения #4';
echo $str4.'<br>';

$str5 = "Пример \$строкового значения #5";
echo $str5.'<br>';

// Пример работы с константами

// Ex.1
// define('TEST','define константы');
// define('TEST','define другой константы');

// Ex.2
// define('TEST','define константы',true);
// echo TEST.'<br>';
// define('TEST','define другой константы');
// echo TEST.'<br>';

// Ex.3
// // const как глобальная появился в версии 5.3
// const TEST2 = 'константы from const';
// echo TEST2.'<br>';

// // const в версии 5.6 научился принимать массивы
// const TESTARR = Array(1,2,3);
// print_r(TESTARR);

// Ex.4
// if (true){
//     define('IFTEST','define константы');
//     //const IFCONST = 'константы';
// }