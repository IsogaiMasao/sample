<?php

$array = array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);


//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum($arr){
  $func = function($value){return $value *2;};
  return array_map($func,$arr);
}

$data = array(1,2,3,4,5);
print_r(sum($data)) ."\n";


//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function add($a,$b){
  $sum = $a + $b;
  return $sum;
}

$result = add(10,20);
echo $result ."\n";


//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。
$arr = array(1,3,5,7,9);
$result = $arr[0];
for ($i=0;$i<count($arr);$i++){
  $result *= $arr[$i];
}
echo $result ."\n";


$numbers = [1,3,5,7,9];
$result = 1;
foreach($numbers as $number){
  // echo "---------number---------\n";
  // var_dump($number);
  $result *= $number;
  // echo "---------result---------\n";
  // var_dump($result);
}
// echo "---------result---------\n";
// echo $result ."\n";

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す
//max_array という関数を実装しようとしています。途中の部分を完成させてください。
$arr = array(1,2,3,4,5,6,7,8,9,10);
function  max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array($arr) ."\n";

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
$string = '<p>strip_tagsの課題を実施。</p>
<p>HTMLタグを消す事ができる「<a href="https://tech-boost.jp/common/books/127">こちら</a>」を参照</p>';

echo strip_tags($string) ."\n";


//array_pushは一つ以上の要素を配列の最後に追加する事が出来る。
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack) ."\n";


//array_mergeは一つまたは複数の配列をマージする。
//配列を作成
$array1 = [1,2,3];
$array2 = [10,20,30];
$array3 = [100,200,300];
//配列を結合する
$array = array_merge($array1, $array2,$array3);
print_r($array) ."\n";


// time,mktime
// 現在のUnixタイムスタンプを表示
echo time() ."\n";

// mktime
// 引数で指定した日時のタイムスタンプを取得
echo date("Y/m/d H:i:s",mktime(0,0,0,2,1,2019)) ."\n";


date("Y/m/d" , time());
date("Y/m/d")





?>
