<?php

interface ExampleInterface{

public function sayHello();

}


class ExampleClass implements ExampleInterface{

 public function sayHello()
 {
     echo 'hello';
 }


}


$example = new ExampleClass();

$example->sayHello();

