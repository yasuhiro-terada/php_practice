<?php
function sum($max) {
    $result =0;
    
    for ($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);

$string = "ABCDEF";
echo strlen($string);

$string ="I love Ruby!";

$new_string = str_replace("Ruby", "PHP" , $string);

echo $new_string;

$array =array (1,2,3,4,5,6,7,8,9,10);

 echo count($array);
 
 
 //課題1
 function double($arg) {
     return $arg *2 ;
 }
 echo double(100);
 
 //課題2
 function f($a, $b){
     $result = $a + $b;
     return $result;
 }
 echo f(5 ,10);
 
 //課題3
function multiply($arr) {
    $result =1;
    foreach ($arr as $a ) { 
    $result *= $a;
    }
    return $result;   //returnでもechoでも同じ結果
}
 echo multiply(array(1,3,5,7,9));
 echo "\n";
 
 //課題4
function max_array($arr) {
    $max_number =$arr[0];
    foreach ($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
    echo max_array(array(123,1234,12321,122222,122333));

//課題5
 //strip_tags
$str = "<h1>aaaaaaaa</h1>";
echo strip_tags($str);

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

