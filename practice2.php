<?php
//課題1
$name = "cobajun";
if($name == "cobajun"){
	echo "私は".$name."です。";
}else{
	echo "私は".$name."ではありません。";
}

//課題2
$total = 0;
for($i = 1; $i<= 10000; $i++){
	$total += $i;
}
echo $total;

//課題3
$fruits = array("もも", "りんご", "ぶどう", "みかん", "いちじく");
foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}

//課題4 応用
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
  if($i % 5 == 0){
    echo $i;
  }
}
?>
