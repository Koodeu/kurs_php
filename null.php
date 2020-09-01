<?php

declare(strict_types=1);

function sayHello(?string $name = null){

    if ($name !==null){
        echo "Cześć:  $name !!!";
    }

    else {
        echo "Cześć! Ale jak masz na imię?";
    }


}

//$imie = 'Bycz';
//sayHello($imie);
sayHello();

//funkcja wykonała się z domyślnym nullem czyli bez imienia.