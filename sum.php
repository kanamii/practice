<?php
// 1~10を足した値を返す関数
    function sum($max){
        // $resultは結果を保存する変数
        $result = 0;
        
        // $iは１から始まり$maxより大きくなるまでループする
        for($i = 1; $i <= $max; $i++){
            // $resultに$iを順番に足していく
            $result += $i;
        }
        
        // $resultを結果として返す
        return $result;
    }
// 関数を実行する
    echo sum(100);
?>

<?php
$string = "ABCDEF";
echo strlen($string);
?>

<?php
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;
?>

<?php
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
?>

<?php
$array = array(2,5,9,7,3,1,8,6,4);
arsort($array);
print_r($array);
?>