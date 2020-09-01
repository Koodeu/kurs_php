<?php

$wallet = 1000;

$cart = [

    ['item' => 'myszka', 'price' => 100],
    ['item' => 'pepier', 'price' => 200],
    ['item' => 'klawiatura', 'price' => 140],
    ['item' => 'laptop', 'price' => 500],
    ['item' => 'DOOM', 'price' => 1300]
    

];

$cartValue=0;

foreach($cart as $item){
    if ($item['price'] > 1000){
        echo "Produkt: {$item['item']} kosztuje za drogo! \n";
        continue;
    }
    $cartValue += $item['price'];
}

echo "wartość Twoich zakupów to: $cartValue";


