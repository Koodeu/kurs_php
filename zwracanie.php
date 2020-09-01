<?php

function policzZnaki($word){

return strlen($word);
// return $count;

}


$wyraz = "Krystian ma kota";


$test = policzZnaki($wyraz);
 echo $test ."\n";
 var_dump($test);

 echo "---------------\n \n";


 //określanie typu zwracanej wartości następuje po dwukropku:

 function countLetters(string $slowo):string {

    return strlen($slowo);

 }

$slowo = "Lila Kota";
$result = countLetters($slowo);

echo $result ."\n";
echo "Typ zwracanej wartości to: ";
 var_dump($result);
echo "----------------\n";


function voidowa(): void{

    echo "Cześć bycz. Jak się masz?";
    

}


voidowa();




