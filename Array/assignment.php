<?php
/*
1.Write a PHP function to sort an array of strings by their length, in ascending order. 
(Hint: You can use the usort() function to define a custom sorting function.)
*/


function sortString($strings){
sort($strings);
echo "Sorted Strings : ";
for($x = 0; $x < count($strings); $x++) {
  echo$strings[$x]." ";

}
}
$strings=(array("D", "A", "B", "C"));
echo "======Assignment 01 output:=====\n\n";
echo "Unsorted Strings : ";
for($x = 0; $x < count($strings); $x++) {
    echo$strings[$x]." ";
  
  }
  echo PHP_EOL;
sortString($strings);

?>
<?php

/*
2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

*/
function concatenate($str){
   $string2 = strrev($str); 
   echo "First String : ".$str."\n";
   echo "Second String : ".$string2."\n";
   echo "concatenate string : ";
   echo $str.=$string2;
}

echo PHP_EOL;
echo PHP_EOL;
echo "======Assignment 02 output:======\n\n";
$string1 = "Hello";
concatenate($string1);
echo PHP_EOL;
echo PHP_EOL;
?>
<?php

/*
3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
*/
function rmvElement($arr1){

    $x = array_splice($arr1, 0, 1);
    $x = array_splice($arr1, -1, 1);
    return $arr1;
}
echo "=======Assignment 03 output======\n\n";
$arr1 = array(
    'A', 
    'B', 
    'C',
    'D',
    'E',
    'F' 
);
echo "Before Removeing :\n";
print_r($arr1);
$rnt = rmvElement($arr1);
echo "After Removeing :\n";
print_r($rnt);
  
echo PHP_EOL;
echo PHP_EOL;
?>
<?php

//4.Write a PHP function to check if a string contains only letters and whitespace.


function check($str){
    $new_str = str_replace(' ', '', $str);
  
    if (ctype_alpha($new_str) && ctype_space($str)) {
         echo "=> Yes\n";
    }
    else{
        echo "=> No\n";
    }
}
echo "Assignment 04 output:\n";
$str = "Hello_ostad\n";
echo "String : ".$str;
check($str);

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

?>
<?php
//5.Write a PHP function to find the second largest number in an array of numbers.
function largest($my_array){
    $n = count($my_array);
    $max_val = $my_array[0];
    for ($i = 1; $i < $n; $i++)
       if ($max_val < $my_array[$i])
          $max_val = $my_array[$i];
    return $max_val;
 }
 echo "Assignment 05 Output:\n";
 $my_array = array(100, 90, 80, 70, 60, 50);
 print_r($my_array);
 print_r("Largest number : ");
 echo(largest($my_array));
 echo(" ");
?>
