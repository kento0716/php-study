問題 4:
次のような配列 colors を作成し、その中から「red」を表示する PHP プログラムを作成してください。

<?php
$colors = ["blue", "red", "green", "yellow", "purple"];

foreach ($colors as $color) {
    if ($color == "red") {
        echo $color;
        break;
    }
}



