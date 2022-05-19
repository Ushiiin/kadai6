<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
    <form action="write.php" method="post">
        お名前: <input type="text" name="name"> <br>
        出身: <input type="text" name="birthPlace"> <br>
        スープ:
        <input type="radio" name="soup" value="豚骨">豚骨
        <input type="radio" name="soup" value="味噌">味噌
        <input type="radio" name="soup" value="塩">塩 <br>
        具材
        <input type="checkbox" name="gu[]" value="もやし">もやし
        <input type="checkbox" name="gu[]" value="チャーシュー">チャーシュー
        <input type="checkbox" name="gu[]" value="卵">卵 <br>
        <input type="submit" value="送信">
        
    </form>
</body>

</html>
