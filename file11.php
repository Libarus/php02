<?php

// Ex.1 Анонимные функции или замыкания
$greet = function($name){
    echo 'Привет тебе, '.$name.'!<br>';
};
$greet('Петя');

// $name2 = 'Вася';
// $greet2 = function($name) use ($name2)
// {
//     echo 'Привет тебе, '.$name.' и тебе, '.$name2.'!<br>';
// };
// $greet2('Петя');

// Ex.2 - динамические функции
// function hello($name) { echo 'Привет, '.$name.'!<br>'; };
// function bye($name) { echo 'Пока, '.$name.'!<br>'; };

// for($i = 0; $i < 15; $i++){
//     if (rand(0,1)) $func = 'hello'; else $func = 'bye';
//     $func('мозг');
// }

// Ex.2 - динамические переменные
// $kraska = 'зелёная';
// $vedro = 'kraska';

// echo "$kraska<br>";
// echo "$vedro<br>";

// echo '$$vedro = '. $$vedro;

// $func = 'greet';
// $$func('Мозг');