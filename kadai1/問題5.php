問数5 （中級）:
年齢を表す変があります。年齢が 20 歳以上かつ 65 歳以下なら「You are an adult.」、それ以外の場合は「You are not an adult.」と表示する PHP プログラムを作成してください。

<?php
if($age > 20) {
	echo "BIG\n";
}elseif ($age < 65){
	echo"SMALL\n";
  #  You are an adult
}elseif (condition) {
	# You are not an adult
}
?>