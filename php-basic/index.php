<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>

<body>
  <!-- 練習 -->
  <p>テスト</p>
  <h1>見出し１</h1>
  <p>
    <?php
    echo 'こんにちは！';
    ?>
    <!-- ショートハンド -->
    <?="こんにちは！";?>
  </p>

  <p>
    <?php
      echo 1+2;
      echo '<br>';
      echo 3*4;
      echo 4/2;
      echo 45%8.5;
      ?>
  </p>

<h1>
  <?php
    echo 2*5.5;
    echo '<br>';
    echo 'こんにちは！' . 'わたしはまひろです！';
  
  ?>
  </h1>

  <h2>
    <?php
    $username = 'まひろ';
    echo $username;
    $username ='だいご';
    echo $username;
    echo '<br>';
    echo "こんにちは！僕の名前は{$username}です！";
    echo '<br>';
    echo 'よろしくお願い致します！'
    ?>
  </h2>


  <!-- kadai005 -->
  <p>
  <?php
  $score_1 = 80;
  $score_2 = 60;
  $score_3 = 55;
  $score_4 = 40;
  $score_5 = 100;
  $score_6 = 25;
  $score_7 = 80;
  $score_8 = 95;
  $score_9 = 30;
  $score_10 =60;
  // 合計点
  $total_score = $score_1 + $score_2 + $score_3 + $score_4 + $score_5 + $score_6 + $score_7 + $score_8 + $score_9 + $score_10;

  // 平均点
  $average_score = $total_score / 10;


  echo $total_score;
  echo '<br>';
  echo $average_score;
  ?>
</p>

<p>
  <?php
  $usernames = ['バナナ','りんご','オレンジ'];
  print_r($usernames);
  ?>
</p>


<p>
  <?php
  $vegetable_1 = ['name' => 'にんじんdesu','color' => 'オレンジ','size' => 10 . 'cm'];
  print_r($vegetable_1);
  echo '<br>';
  $vegetable_1['price'] = 200;
  echo $vegetable_1['price'];
  echo '<br>';
  print_r($vegetable_1);
  echo '<br>';
  echo '<br>';
  var_dump($vegetable_1);
  ?>
</p>



<!-- kadai007 -->
<p>
  <?php
  $vegetable_Data_1 =['name' => 'onion','price' => 200,'weight' => 160];
  print_r($vegetable_Data_1);
  ?>
</p>

<!-- 練習 -->

<p>
  <?php
  $position = 'bottom';
  if($position === 'left'){
    echo "配置は{$position}です";
  }
  else if($position === 'right'){
    echo "配置は{$position}です";
  }
  else{
    echo '配置が違います';
  }
  echo '<br>';
  var_dump($position === 'left');
  ?>
</p>

<p>
  <?php
    $num = mt_rand(0,10);
    if($num === 5){
      echo "出力された文字は{$num}です";
    }

    else if($num > 2 && $num < 5){
      echo "出力された文字は2より大きく、5より小さいです";
    }

    else if($num < 5 ){
      echo "出力された文字は5以下です";
    }
  
    else {
      echo $num;
    }
  ?>
</p>


  
</body>
</html>