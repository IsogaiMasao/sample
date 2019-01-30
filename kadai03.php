<?php
/*
$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。
*/
$name = "Masao";
if($name = "Masao"){
  echo "私はMasaoです" ."\n";
} else {
  echo "私はMasaoではありません" ."\n";
}

//for文を使って、1から10000までの合計の値を表示してください。
$answer = 0;
for ($i = 1; $i <= 10000; $i++) {
  $answer +=$i;
}
echo $answer ."\n";

//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください
$fruits = array("apple", "orange", "lemon", "banana", "peach");
foreach($fruits as $fruits){
  echo "好きなフルーツは" . $fruits;
  echo "\n";
}

//応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
      echo $i ."\n";
    }
}




?>
