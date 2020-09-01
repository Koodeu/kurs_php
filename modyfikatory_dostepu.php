<?php

class Cat
{

        public $iloscLap = 'public';
        private  $sound = 'private';
        protected  $rasa = 'protected';


    private function privFoo():void{
        echo "jestem metodą prywatną \n";
    }


    public function printProperties():void{

        var_dump($this->iloscLap);
        var_dump($this->sound);
        var_dump($this->rasa);

        $this->privFoo();

    }


}   



$cat1 = new Cat();
var_dump($cat1->iloscLap);
//var_dump($cat1->sound); //to jest metoda prywatna niewidoczna spoza obiektu
//var_dump($cat1->rasa);


var_dump($cat1->printProperties());



 