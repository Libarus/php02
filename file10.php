<?php

// рекурсивные функции

function recursive0()
{
    echo 'вошли в функцию (0)<br>';
    // идентичный код
    recursive1();
    echo 'вышли из функции (0)<br>';
}

function recursive1()
{
    echo 'вошли в функцию (1)<br>';
    // идентичный код
    recursive2();
    echo 'вышли из функции (1)<br>';
}

function recursive2()
{
    echo 'вошли в функцию (2)<br>';
    // идентичный код
    echo 'вышли из функции (2)<br>';
}
recursive0(0);


// Ex.2
// function recursive($a){
//     echo 'вошли в функцию ('.$a.')<br>';
//     if($a < 20) recursive($a + 1);
//     echo 'вышли из функции ('.$a.')<br>';
// }
// recursive(0);

