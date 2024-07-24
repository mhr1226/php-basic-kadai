<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array,$order){
          // 条件分岐
            if($order === true){
            echo "昇順にソートします。<br>";
            sort($array);
          }

          else if($order === false){
            echo "降順にソートします。<br>";
            rsort($array);
          }
          // 繰り返し処理
          foreach($array as $value){
            echo "{$value}<br>";
          }
          }
          // 配列の定義
          $nums = [15,4,18,23,10];
          // 関数の呼び出し
        sort_2way($nums,true);
        sort_2way($nums,false);
        ?>
    </p>
</body>

</html>
