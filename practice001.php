<?php

$height =160;
 if ($height <150 ) {
     echo "150㎝　未満の方はご乗車できません";
 } else {
     echo "ご乗車になれます";
 }

$height =230;
 if ($height < 150){
     echo "150㎝　未満の方はご乗車できません";
 }else if ($heightb >= 200) {
     echo "200㎝　以上の方はご乗車できません";
 }else {
     echo "ご乗車になれます";
 }
 
$weekday ="月曜";

switch($weekday) {
    case "月曜":
        echo "可燃ごみの日です";
        break;
    case "水曜":
        echo "資源ごみの日です";
        break;
    default:
        echo "回収はありません";
        break;
}

switch ($weekday) {
    case "月曜":
    case "木曜":
        echo "可燃ごみの日です";
        break;
    case "水曜":
        echo "資源ごみの日です";
        break;
    default:
        echo "回収はありません";
        break;
}

$a = 3;
$b = 3;
$c = "3";

var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);
var_dump($a >= $b);
var_dump($a < $b);
var_dump($a <= $b);
var_dump($a === $c);
var_dump($a !== $c);

for ($i = 0; $i < 10; $i++){
    echo $i;
}

$total = 0;

for ($i = 0; $i <= 100; $i++){
    $total += $i;
}

echo $total;

$fruits = array("apple","orange","lemon");
echo count($fruits);

for ($i =0; $i <count($fruits); $i++) {
    echo "要素は". $fruits[$i];
    echo "\n";
}

$animals =array("dog","cat","panda");

foreach ($animals as $animal){
    echo "yousoha". $animal;
    echo "\n";
}

//

/*
aa
aa
aa
*/