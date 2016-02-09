<?php

// Ex.1
// func();
// func2();

$method = true;
if ($method){

    function func2(){
        echo 'Внутри функции - method<br>';
    }

}

function func(){
    echo 'Внутри функции<br>';
}


// Ex.2 - вложенные функции
// function func_one()
// {
//     echo 'Выполнение func_one<br>';
//     function func_two()
//     {
//         echo 'Выполнение func_two<br>';
//     }
// }

// //func_one();
// func_two();