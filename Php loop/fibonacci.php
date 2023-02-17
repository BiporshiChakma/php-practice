<?php

// 0 1 1 2 3 5 8 13 21 34 55 89 144

$first = 0;
$old = 1;
$new = 1; 
for($j=0; $j<=10; $j++){
    echo $first." "; // first = 0 // first = 1 // first = 2
    $old = $new; // old = 1 // old = 2 // old = 3
    $new = $old + $first; // new = 1 + 1 = 2 // new = 2 + 1 = 3 // new = 3 + 2 = 5
    $first = $old; // first = 1 // first = 2 // first = 3

}
/*
0 +  1 = 1
1  + 1 = 2
1 + 2 = 3
2 + 3 = 5
*/

echo PHP_EOL;

$fib = 0;
$first = 1;
$second = 1;
for($j=0; $j<=10; $j++){
    echo $fib." ";
    $second = $fib;
    $fib = $first + $second;
    $first = $second;


}
