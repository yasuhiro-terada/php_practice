<?php

//課題1
$name = "yasuhiro";
if ($name == "yasuhiro"){
    echo "私は". $name . "です";
} else {
    echo $name . "ではありません";
    echo "\n";
}

//課題2
$total = 0;

for ($i =0; $i <=10000; $i++) {
    $total +=  $i;
}
    echo $total;
    echo "\n";

//課題3
$fruits = array("apple","peach","melon","orange","grape");
 foreach ($fruits as $fruit){
     echo $fruit;
     echo "\n";
 }
 //課題4
 $start = 1;
 
 $end = 100;
 
 for ($i = $start; $i<= $end ;$i++){
     if ($i % 5 ==0){
         echo $i;
         echo "\n";
     }
 }
 

 