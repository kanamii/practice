<?php
// 課題１
    function double($num){
        $result = $num * 2;
        return $result;
    }
    echo double(4);
?>

<?php
// 課題２
    function sum($a, $b){
        $result = $a + $b;
        return $result;
    }
    echo sum(1,2);
?>

<?php
// 課題３

function multiply($arr){
    $result = 1;
    
    // $iは0から始まる;$arrの要素の数だけ繰り返す;要素を取り出す
    for ($i=0; $i < count($arr); $i++){
        // 要素をかけていく
        $result *= $arr[$i]; 
    }
    return $result;
}
$array = array(1, 3, 5, 7, 9);

echo multiply($array);
?>

<?php
// 課題３-２
$array = array(1, 3, 5, 7, 9);
function multiply2($arr){
    $result = 1;
    
    foreach($arr as $number){
        $result *= $number;
    }
    return $result;
}
echo multiply2($array);
?>

<?php
// 課題４
$arr = array(1, 10, 5, 7, 9);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
    if($a > $max_number){
        $max_number = $a;
    }
 }
 return $max_number;
 }
 echo max_array($arr);
?>

<?php
// 課題５
// strip_tags：指定した文字列からHTMLとPHPタグを取り除く
$string = "<h1>タグを取り除く関数</h1>";

echo strip_tags($string);

// array_push：配列の最後に要素を追加する
$city = ["tokyo", "osaka", "nagoya"];
array_push($city, "sapporo", "fukuoka");
print_r($city);

// array_merge：配列を結合する
$num1 = [10, 100, 1000];
$num2 = [20, 200, 2000];
$num3 = [30, 300, 3000];

$number = array_merge($num1, $num2, $num3);

print_r($number);

// time：現在のタイムスタンプ（日付、時間を表す数字）を取得する
$today = time();
// mktime：指定した日時のタイムスタンプを表示する
$day = mktime(0, 0, 0, 1, 1, 2021);

// date:タイムスタンプを日時として表示
echo date('y/m/d', $today);
echo "\n";
echo date('y/m/d', $day)."\n";

// 明日を表示
echo date('y/m/d', mktime(0, 0, 0, date('n'), date('j')+1, date('y')));
?>