<?php


class Door{

private $doorCode = "123qwe";
private $isClosed = true;


public function unlockDoor($code){

        if ($code === $this->doorCode){
            echo "Drzwi otwarte";
            $this->isClosed = false;
            var_dump($this);
        }

        else {

            echo "Nieprawidłowy kod do drzwi. Spierdalaj włamywaczu! \n";
            var_dump($this);
        }



}


}


$door1 = new Door();
$door1->unlockDoor("123qwead");