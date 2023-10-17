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
if($age > 20) {
	echo "BIG\n";
}elseif ($age < 65){
	echo"SMALL\n";
  #  You are an adult
}elseif (condition) {
	# You are not an adult
}
?>
問題 6（中級）:
変数 num が 0 または正の偶数である場合、「num is non-negative and even」を表示する PHP プログラムを作成してください。

<?php
if(is_numeric(0)){
}else{

}elseif(connection){

}  #num is non-negative and even
?>

問題 7（中級）:
二つの変数 num1 と num2 があります。もし num1 が num2 の倍数であれば、「num1 is a multiple of num2」を表示し、そうでなければ、「num1 is not a multiple of num2」を表示する PHP プログラムを作成してください。

<?php
$num1 =  $num2;
if(($num1 % $num2)){
	echo  # num1 is a multiple of num2
}else{
	echo # num1 is not a multiple of num2
}
?>

問題 8（上級）:
年齢を表す変数 age があります。年齢が 18 歳以上かつ運転免許を持つ変数 hasDrivingLicense が true であれば、「You can drive.」、そうでなければ「You cannot drive.」と表示する PHP プログラムを作成してください。

<?php
if($age >=18 && $age == '運転免許書持ち'){
	echo # hasDrivingLicenes
}elseif(connection){
	echo # You cannot drive
}
?>

問題 9（上級）:
2 つの変数 temp（温度）と isRaining（雨が降っているか）があります。もし温度が 0 度以下で雨が降っている場合は「It may snow.」、そうでなければ「It is unlikely to snow.」と表示する PHP プログラムを作成してください。

<?php
$temp = 0度
$isRaining

if($temp <=0 && $isRaining == '雨が降る'){
	echo # It may snow
}elseif(connection){
	echo #It is unlikely to snow
}
?>

問題 10（上級）:
変数 grade（成績）があります。grade が 90 以上なら「You got an A」、80 以上 90 未満なら「You got a B」、70 以上 80 未満なら「You got a C」、60 以上 70 未満なら「You got a D」、それ以外の場合は「You got an F」と表示する PHP プログラムを作成してください。

<?php
$grade >= 90
$grade 80 > < 90
$grade 70 > <80
$grade 60 > <70
$grade 60 > =

if($grade >= 90){
	echo "BIG\n";
}elseif{$grade 80> && < 90
	echo
}









