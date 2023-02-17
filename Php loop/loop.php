<?php

function print1()
{
    for ($i = 0; $i <= 3; $i++) {
        echo "Hello Programmers" . PHP_EOL;
        if ($i == 2) {
            break;
        }
    }

    echo PHP_EOL;
    $t = 100;
    $t1 = 200;
    echo $t + $t1;
}
print1();

echo PHP_EOL;
echo PHP_EOL;
for ($i = 0; $i <= 10; $i++) {
    
    $j = $i;
    if ($i == 3 || $i == 5 || $i == 7) {
        
        continue;
    }  
    echo "Hello Bangladesh $j".PHP_EOL;
}
echo PHP_EOL;
echo PHP_EOL;


//Another Way to use loop 
//foreach function
$alpabet = array('A','E','I','O','U');

foreach($alpabet as $onebyone){
    echo $onebyone.PHP_EOL;
}
