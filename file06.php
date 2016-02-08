<?php

function func($name){
    echo '(f) Привет, '.$name.'<br>';
    $name = 'Света';
    echo '(f) Привет, '.$name.'<br>';
}

$name = 'Ира';
echo 'Привет, '.$name.'<br>';
func('Коля');
echo 'Привет, '.$name.'<br>';
