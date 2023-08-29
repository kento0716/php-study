<!-- 問題 1（初級）:
ある変数 num が 10 より大きい場合、「num is greater than 10」と表示する PHP プログラムを作成してください。 -->

<?php
if($count >10)
{echo"BIG\n";}

// hogeo
?>
<!--問題 2（初級）:
二つの変数 num1 と num2 があります。num1 が num2 より大きい場合は「num1 is greater than num2」、小さい場合は「num1 is less than num2」、等しい場合は「num1 is equal to num2」と表示する PHP プログラムを作成してください。

<?php
if ($var > 10) {
    echo "BIG\n";
} elseif ($var== 10) {
    echo "NORMAL\n";
} else {
    echo "SMALL\n";
}
?>

問題 3（初級）:
変数 num が奇数か偶数かを判定する PHP プログラムを作成してください。

<?php
function is_evenodd($a)
{
	if ($a % 2 == 0) {
		return 'even';
	} else {
		return 'odd';
	}
}

if (is_evenodd(100) === 'even') {
	// 偶数の場合
}

if (is_evenodd(100) === 'odd') {
	// 偶数の場合
}
?>
問題 4（中級）:
変数 num が 0 以上かつ 100 以下かを判定する PHP プログラムを作成してください。

<?php
if (num > 0 && num < 100){
	printf("num は0より大きく100より小さい\n");
  }
  ?>
問題 5（中級）:
年齢を表す変数 age があります。年齢が 20 歳以上かつ 65 歳以下なら「You are an adult.」、それ以外の場合は「You are not an adult.」と表示する PHP プログラムを作成してください。

<?php

?>
問題 6（中級）:
変数 num が 0 または正の偶数である場合、「num is non-negative and even」を表示する PHP プログラムを作成してください。