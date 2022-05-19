<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>ラーメンオーダー</title>
</head>
<body>
    <h1>ラーメンオーダー</h1>
    <table>
    <tr>
      <th>名前</th>
      <th>出身地</th>
      <th>スープの味</th>
      <th>具材</th>
    </tr>
    <?php
    // ファイルを開く
    $openFile = fopen('data/data.txt', 'r');
    // ファイル内容を1行ずつ読み込んで出力
    while ($str = fgets($openFile)) { ?>
        <tr>
        <?php 
        // explode関数で,で分ける。.split(',')のイメージ。
        $temp = explode(',',$str);
        // print_r($temp);
        $out = '';
        for ($i = 0; $i < count($temp); $i++) { ?>
            <td>
            <?php
            echo $temp[$i];
            ?>
            </td>
            <?php
        }; ?>
        <tr>
        <?php
    }; ?>
    <?php
    // ファイルを閉じる
    fclose($openFile);
    ?>
  </table>
</body>
</html>


