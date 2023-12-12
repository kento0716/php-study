問題 7: 偶数と奇数
**要件**: 整数を引数に取り、その数が偶数であれば"Even"、奇数であれば"Odd"という文字列を返す関数`evenOrOdd`を定義してください。

<?php

function evenOrOdd($number) {
    // 引数が整数でない場合のエラー処理を追加することも検討できます
    if (!is_int($number)) {
        return "引数は整数である必要があります。";
    }

    // 偶数か奇数かを判定して返す
    return ($number % 2 === 0) ? "Even" : "Odd";
}

// テスト用の整数
$sampleNumber = 7;

// 関数を呼び出して結果
$result = evenOrOdd($sampleNumber);

// 結果を出力
echo "{$sampleNumber}は{$result}です。";
?>
