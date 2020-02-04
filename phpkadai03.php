<?php
$name = "遼太";
if ($name == "遼太") {
    echo "私は".$name."です".PHP_EOL;
}
else {
    echo "あなたの名前ではありません".PHP_EOL;
    
}
$total = 0;
for ($i = 1; $i <= 1000; $i++) {
    $total += $i;
}
echo $total.PHP_EOL;

$fruits = array("grape","orenge","apple","strawberry","melen");
foreach($fruits as $fruit) {
    echo $fruit.PHP_EOL;
}

//for文の始めの値を定義する
$start = 1;
//for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= $end; $i++){

// 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i.PHP_EOL;
  }
}