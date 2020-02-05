<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function nibai($x){
    return $x * 2;
}
echo nibai(10).PHP_EOL;


//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sum($a, $b) {
    return $a + $b;
}
echo sum(1,2).PHP_EOL;


//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function number($arr) {
    $result = 1;
    foreach ($arr as $a) {
        $result = $result * $a;
    }
    return $result; 
}
echo number(array(1, 3, 5, 7, 9)).PHP_EOL;


//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
    foreach($arr as $a){
//どうしたらいいかわからない・・・・    
    if($max_number < $a){
        $max_number = $a;
    }
    }
    return $max_number;
}
echo max_array(array(1, 2 ,3 , 4, 5, 100)).PHP_EOL;


//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

//strip_tags・・・指定した文字列からHTMLタグを取り除く
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo $text.PHP_EOL;
echo strip_tags($text).PHP_EOL;


//array_push・・・一つ以上の要素を配列の最後に追加する関数
$stack = array("orange", "banana");
print_r($stack).PHP_EOL;
array_push($stack, "apple", "raspberry");
print_r($stack).PHP_EOL;

//array_merge・・・配列の要素の最後にひとつまたは複数の配列を結合する
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array($array1, $array2);
print_r($result).PHP_EOL;
$result = array_merge($array1, $array2);
print_r($result).PHP_EOL;

//time・・・・現在の Unix タイムスタンプを返す
//mktime・・・指定した日時のUNIXタイムスタンプを取得する
//date・・・・指定された日時を任意の形式でフォーマットし、日付文字列を返す関数
echo "today " . date('Y-m-d', time(0, 0, 0, 5, 6, 1234)).PHP_EOL;
echo "today " . date('Y-m-d', mktime(0, 0, 0, 5, 6, 1234)).PHP_EOL;
