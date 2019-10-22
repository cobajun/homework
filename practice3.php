<?php
//課題1
function kadai1($integer){
	$result = 0;
	$result = $integer * 2;
	return $result;
}
//echo kadai1(55);

//課題2
function kadai2($a, $b){
	$result = 0;
	$result = $a + $b;
	return $result;
}
//echo kadai2(2,3);

//課題3
$array = array(1, 3, 5 ,7, 9);
function kadai3($arr){
	$result = 1;
	for ($i = 0; $i < count($arr); $i++) {
		$result *= $arr[$i];
	}
	return $result;
}
echo kadai3($array);
echo "\n";

//課題4
$array2 = array(1, 10, 8 ,7, 9);
function max_array($arr){
	$max_number = $arr[0];
	asort($arr);
	foreach($arr as $a){
		$max_number = $a;
	}
	return $max_number;
}
echo max_array($array2);
echo "\n";

//課題5-1 strip_tags
$str1 = "<p>段落テキストです。HTMLタグをremoveします。</p>";
echo strip_tags($str1);
echo "\n";

//課題5-2 array_push
$array3 = array("父","母"); 
array_push($array3, "娘");
print_r($array3);
echo "\n";

//課題5-3 array_merge
$array4 = array("キウイ","ぶどう"); 
$array5 = array("グラタン","ドリア","スパゲティ"); 
$array6 = array("寿司","ハンバーグ","お好み焼き","しゃぶしゃぶ");
$array_merge = array_merge($array4, $array5, $array6);
print_r($array_merge);
echo "\n";

//課題5-4 time,mktime unixタイムスタンプ
echo time();
echo "\n";

echo mktime(date('H'),date('i'),date('s'),date('m'),date('d'),date('Y'));
echo "\n";

$now = time();
echo date('Y-m-d H:i:s', $now); //日付ゾーン違う？日本時刻じゃない？
?>