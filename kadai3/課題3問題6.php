問題 6: 最小値の探索
**要件**: 数値の配列を引数に取り、その最小値を返す関数`findMin`を定義してください。

<?php
function findMin($numbers) {
    // 配列が空の場合はエラー値を返すか、エラー処理を追加することも検討できます
    if (empty($numbers)) {
        return null;
    }

    // 配列内の最小値を取得
    $minValue = min($numbers);

    return $minValue;
}

// テスト用の配列
$sampleArray = [4, 2, 8, 1, 6];

// 関数を呼び出して最小値を取得
$minValue = findMin($sampleArray);

// 結果を出力
echo "配列の最小値: " . $minValue;

?>
