<?php
function dosomething(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i++;
    echo "\n";
}

dosomething();
dosomething();
dosomething();
dosomething();