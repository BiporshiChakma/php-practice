<?php

function sum(int $x,int $y,int $z):int { //we can define return data type 
    //return "abcd";
    return $x+$y+$y;
}
echo sum(5,6,7);

echo PHP_EOL;
echo PHP_EOL;
function sum_(int...$n){
    $result = 0;
    for($i=0; $i<count($n); $i++){
        $result += $n[$i];
    }
    return $result;
}
echo sum(1,2,3,4,5,6);