問題 5: 文字列の反転
**要件**: 文字列を引数に取り、その文字列を反転したものを返す関数`reverseString`を定義してください

<?php

function reverseString($inputString) {
    // 文字列を1文字ずつ取得して逆順に結合
    $reversedString = '';
    for ($i = strlen($inputString) - 1; $i >= 0; $i--) {
        $reversedString .= $inputString[$i];
    }

    return $reversedString;
}

// テスト用の文字列
$sampleString = "Hello, World!";

// 関数を呼び出して反転した文字列を取得
$reversedString = reverseString($sampleString);

// 結果を出力
echo "元の文字列: " . $sampleString . "<br>";
echo "反転した文字列: " . $reversedString;

?>

