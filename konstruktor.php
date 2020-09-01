<?php


class Animal {

//właściwości klasy
private $numberOfPaws;
private $sound;


//konstruktor
public function __construct($numberOfPaws, $sound){
    $this->numberOfPaws = $numberOfPaws;
    $this->sound = $sound;
}

//metoda dajGłos
public function giveSound( $sound){
    echo "$sound";
}    


}




$kot1 = new Animal(4, "miau miau");

// var_dump($kot1);

$soundOfAnimal = "meao!";

$kot1->giveSound($soundOfAnimal);

