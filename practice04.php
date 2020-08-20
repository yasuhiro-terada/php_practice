<?php

//1
function double($aaaa) {
    return $aaaa *2 ;
}
    echo double(111111);

//2
function sum($a,$b) {
    return $a + $b ;
}
    echo sum(1000,12345);

//3
function multi($arr) {
    $result =1 ;
    foreach ($arr as $bbbb){
        $result *= $bbbb;
    }
    return $result;
}
    echo multi(array(1,3,5,7,9));

//4
function max_array($arr){
    $max_number = $arr[0];
    foreach ($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;

    echo max_array(array(1111,2222,3333,4444,5555));
    echo "\n";

//5
 //array_push
 $members = array("1","2","3","4","5","6");
 array_push ($members,"7","8","9");
 print_r($members);

 //array merge
 $array1 =[1,2,5];
 $array2 =[6,9,10];
 
 $array = array_merge($array1, $array2);
 print_r($array);

 //time mktime
 echo time();
 echo mktime();
 
 //date
 echo date("Y/m/t");
    
    
    

?>