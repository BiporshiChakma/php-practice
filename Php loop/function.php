<?php
//encapsulation
//even odd
function evenodd($n){ //parameter
    if($n%2 == 0)
    {
        return true;
        
    }
    else{
        return false;
    }
}

//facorial
function factorial($n){
    if(gettype($n)!="integer"){
        return "Invalid";
    }
    $result = 1;
    for($i=$n; $i > 1; $i--){
        $result  = $result * $i; 
    }
    return $result;
}

//default type function

function serve($foodtype ,$numberofitem = "1 cup"){
    echo "{$numberofitem} of {$foodtype} has been served";
}


