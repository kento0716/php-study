問題 10（上級）:
変数 grade（成績）があります。grade が 90 以上なら「You got an A」、80 以上 90 未満なら「You got a B」、70 以上 80 未満なら「You got a C」、60 以上 70 未満なら「You got a D」、それ以外の場合は「You got an F」と表示する PHP プログラムを作成してください。

<?php
$grade = 67;

if ($grade >= 90) {
	echo "90以上\n";
	# You got an A
} elseif($grade > 80 && $grade < 90) {
	echo "80以上かつ90未満\n"; 
	# You got a B
} elseif($grade > 70 && $grade < 80) {
	echo "70以上かつ80未満\n";
	# You got a C
} elseif($grade > 60 && $grade < 70) {
	echo "60以上かつ70未満\n";
    #You got a D
}elseif($grade <=60) 
	echo "60未満"
	#You got an F

?>




