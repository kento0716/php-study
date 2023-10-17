問題 3（初級）:
変数 num が奇数か偶数かを判定する PHP プログラムを作成してください。
<<<<<<< HEAD

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