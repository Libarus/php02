<?php

// Ex.1 - параметр функции
// function func($name){
//     echo 'Привет, '.$name.'!<br>';
// }
// func('Коля');

// Ex.2 - параметр со значением по умолчанию
// function func2($name, $age = 23, $city = 'Москва'){
//     echo 'Привет, '.$name.'! Твой возраст: '.$age.' и город '.$city.'<br>';
// }
// func2('Коля', 32);

// Ex.3 - параметр ссылкой
// function func3($name){
//     echo 'Привет, '.$name.'!<br>';
//     $name = 'Ира (изменили внутри функции)';
// }

function func4(&$name){
    echo 'Привет, '.$name.'!<br>';
    $name = 'Ира (изменили внутри функции)';
}
// $name = 'Коля';
// func3($name);
// echo 'Привет, '.$name.'!<br>';
// func4($name);
// echo 'Привет, '.$name.'!<br>';

func4('Петя');