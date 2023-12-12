問題 3: 数の足し算
**要件**: 2 つの数値を引数に取り、その和を返す関数`addNumbers`を定義してください。

<?php
function addNumbers($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}

$number1 = 5;
$number2 = 10;
$result = addNumbers($number1, $number2);

echo "Sum of $number1 and $number2 is: $result";

?>

