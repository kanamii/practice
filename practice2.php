<?php
// 課題１
    $name = "Kanami";
    if ($name == "Kanami") {
        echo "私は" . $name ."です。";
    } else {
        echo "私は" . $name . "ではありません";
    }

// 課題２
    $total = 0;
    for ($i = 0; $i <= 10000; $i++) {
        $total += $i;
    }
    echo $total;

// 課題３
    $fruits = array("orange", "peaach", "banana", "apple", "mango");
    foreach($fruits as $fruits){
        echo $fruits;
        echo "\n";
    }

// 課題４
/* for文の始めの値を定義する */
    $start = 1;
/* for文の終わりの値を定義する */
    $end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}