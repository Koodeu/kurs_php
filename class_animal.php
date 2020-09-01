<?php

declare(strict_types=1);

class Animal    
{

    //właściwości
 public $voice = "miau";
 public $iloscLap;

    //metody
public function openEyes(): void{
    echo "Kot otworzył oczy \n";
}


public function closeEyes(): void{
    echo "Kot zamknął oczy \n";
}

// koniec ciała klasy

}


$animal1 = new Animal;

$animal1->iloscLap = 4;
$animal1->voice = "hau!";

//wywołanie metod
$animal1->openEyes();
$animal1->closeEyes();


// --------------------THIS-------------------