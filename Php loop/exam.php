<?php
/*write a function that takes an array of an integer and a target sum as input and return a boolean indicating wheather there 
exits a pair of integers in the array that add up to the target sum. You can assume the array has at least two elements and all 
elements are unique.Use a PHP loop in your solusion.
input: [5,7,1,2,8,4,3],8
output:true (cause 5+3=8)
*/
function sum($x,int...$n){
    for($i=0; $i<=6; $i++){
        if($n[$i]+$n[$i+1]==$x){
            echo "true (beacause {$n[$i]} + {$n[$i+1]} = {$x})";
            echo PHP_EOL;
        }
        else{
            echo "false";
            echo PHP_EOL;
        }
    }

}
sum(8,5,7,1,2,8,4,3);


/*

function fun($x,$y){
    $x=4;
    $y =3;
    $z= $x+$y/$y+$x;
    echo "$z";
}
fun(3,4);*/

/*
$num = array(1,2,3,4,5);
//$i=0;
$sum = 0;
foreach($num as $num){
    if($num%2==0){
        continue;
    }
    $sum+=$num;
}
echo $sum;
echo PHP_EOL;
echo PHP_EOL;


function srtFun($str){
    if(strlen($str)==0){
        return "";
    }
    else{
        return srtFun(substr($str,1)).substr($str,0,1);
    }
}
echo srtFun("hello");
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$foo = function($x){
    return $x*2;
};
$bar = function($x) use ($foo){
    return $foo($x)+1;
};
echo $bar(5);
/*
do{
    echo $num[$i];
    $i++;
}while($i<count($num));
*/
