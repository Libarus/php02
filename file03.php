<?php

func();
func2();

$method = true;
if ($method){

    function func2(){
        echo 'Внутри функции - method<br>';
    }

}

function func(){
    echo 'Внутри функции<br>';
}
