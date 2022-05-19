<?php
date_default_timezone_set('Asia/Tokyo');
// 記入時間
$time = date('Y-m-d H:i:s');

$name = $_POST['name'];
$birthPlace = $_POST['birthPlace'];
$soup = $_POST['soup'];

if (isset($_POST['gu'])) {
    $gu = implode(' ', $_POST["gu"]);
    // echo '具：' . $q . '<br>';
} else {
    $gu = "";
    // echo 'チェックされていません。<br>';
}

// ファイルオープン
$file = fopen('data/data.txt', 'a');
// ファイル書き込み
fwrite($file, $name . ',' . $birthPlace . ',' . $soup . ',' . $gu . "\n"); // ドットの後にバックスラッシュn
// テキストの中で改行するので\nを使う。ブラウザの場合<br>を使う。
// ファイルに保存
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
