<?php
  $height = 160;
  if ($height < 150) {
  echo "150cm 以下の方はご乗車できません。";
} else {
  echo"ご乗車になれます。" ."\n";
}

  $height =230;
  if($height < 150) {
    echo "150cm 以下の方はご乗車できません。" ."\n";
  } else if ($height > 200){
    echo "200cm 以上の方はご乗車できません。" ."\n";
  } else {
    echo "ご乗車になれます。" ."\n";
  }

  $weekday = "月曜";
  switch ($weekday) {
    case "月曜";
    echo "可燃ゴミの日です。" ."\n";
      break;
    case "水曜";
    echo "資源ゴミの日です。" ."\n";
      break;
    default:
    echo "回収はありません。" ."\n";
      break;
  }

  $weekday = "木曜";
  switch ($weekday) {
    case "月曜";
    case "木曜";
      echo "可燃ゴミの日です。" ."\n";
      break;
    case "水曜";
      echo "資源ゴミの日です。" ."\n";
      break;
    default:
      echo "回収はありません。" ."\n";
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

for($i = 0; $i < 10; $i++){
  echo $i;
}

$total = 0;
echo $total;
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total ."\n";

$fruits = array("apple", "orange", "lemon");
echo count($fruits);
for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" . $fruits[$i];
  echo "\n";
}

$animals = array("dog", "cat","panda");
foreach($animals as $animal){
  echo "要素は" . $animal;
  echo "\n";
}




?>
