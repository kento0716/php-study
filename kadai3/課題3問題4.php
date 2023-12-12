問題 4: 配列の合計
**要件**: 数値の配列を引数に取り、その要素の合計を返す関数`arraySum`を定義してください

<?php

function arraySum($numbers) {
    
    $sum = 0;
    foreach ($numbers as $number) {
        if (is_numeric($number)) {
            $sum += $number;
        }
    }
    return $sum;
}
$sampleArray = [1, 2, 3, 4, 5];

$total = arraySum($sampleArray);

echo "配列の合計: " . $total;

?>


