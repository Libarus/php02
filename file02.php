<?php

// Проверка существование функции: function_exists

// простое создание функции
function func(){
    echo 'Внутри функции<br>';
}

if (!function_exists('func2')){

    function func2(){
        echo 'Внутри функции - 2<br>';
    }

}

func();
func2();