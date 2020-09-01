<?php
//funkcja anonimowa to funkcja bez nazwy czyli:

// function (arguments) : typ_zwracany
// {
//     ciało
// }


$zmiennaDlaFunkcjiAnonimowej = function (string $word): void {
    echo "Hello world! Nazywam się $word";
};


 $zmiennaDlaFunkcjiAnonimowej("Krystian");

 //tutaj wywołujemy funkcję, która nie ma nazwy za pomocą zmiennej do której jest przypisana

 //callable

 function myCall(callable $funkcja): void{

    $funkcja();


 }


 myCall(function(){
     echo "\n hej!";
 });

