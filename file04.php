<?php

function func(){
    echo 'Внутри функции<br>';

    function func2(){
        echo 'Внутри функции - 2<br>';
    }

}

// func();
func2();