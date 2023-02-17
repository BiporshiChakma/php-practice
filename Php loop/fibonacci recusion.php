<?php
function fib($old,$new,$end){
    static $start;
    $start=$start??1;

    if($start>$end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old +$new;
    $old = $new;
    $new = $_temp;

    fib($old,$new,$end);
}
fib(0,1,10);