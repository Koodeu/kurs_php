<?php

class User {

    public $name;
    protected $pass;

    public function __construct($name, $pass)
    {
        $this->name = $name;
        $this->pass = $pass;
    }


}



class Client extends User {

private $number;

public function __construct($number, $name, $pass){
    $this->number = $number;
    $this->name = $name;
    $this->pass = $pass;

}


}

$client1 = new Client(111, 'byczbycz', 'testpass');
// var_dump($client1);

// var_dump($client1->pass);
var_dump($client1->name);