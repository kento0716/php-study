問題 8: 文字列の長さ
**要件**: 文字列を引数に取り、その文字列の長さ（文字数）を返す関数`stringLength`を定義してください。PHP の組み込み関数`strlen`は使わないでください

<?php

function stringLength($inputString) {
    // 文字列の各文字に対してループし、文字数をカウントする
    $length = 0;
    while (isset($inputString[$length])) {
        $length++;
    }

    return $length;
}

// テスト用の文字列
$sampleString = "Hello, World!";

// 関数を呼び出して文字列の長さを取得
$length = stringLength($sampleString);

// 結果を出力
echo "文字列の長さ: " . $length;

?>
