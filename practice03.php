<?php
$name = yasuhiro;
if ($name == "yasuhiro"){
    echo "私は". $name . "です";
} else {
    echo "私は". $name . "ではありません";
    echo "\n";
}

$total = 0;

for ($i =0; $i <=10000; $i++) {
    $total = $total + $i;
}
    echo $total;

$fruits = array("apple","peach","melon","orange","grape");
 foreach ($fruits as $fruit){
     echo $fruit;
     echo "\n";
 }
 
 $start = 1;
 
 $end = 100;
 
 for ($i = $start; $i<= $end ;$i++){
     if ($i % 5 ==0){
         echo $i;
         echo "\n";
     }
 }
 