<?php

abstract class Animal{

    abstract public function makeSound(string $theSound);
}


class Ssak extends Animal{

 public $rasa;

public function __construct($rasa)
{
    $this->rasa = $rasa;
}

public function makeSound(string $sound){

    echo $sound;

}


}


$ssak1 = new Ssak("pies");


$ssak1->makeSound("hau");

