<?php

declare(strict_types=1);

function sayHello(string $name){

    echo "Cześć! Nazywam się $name";
}

$name = 'Krystian';
//$name = 12; tutaj nie zajdzie automatyczne rzutowanie tak jak w trybie domyślnym.

sayHello($name);