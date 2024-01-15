<?php
    const SERVER ='mysql220.phy.lolipop.lan';
    const DBNAME ='LAA1518097-final';
    const USER ='LAA1518097';
    const PASS ='Pass0614';

    $connect ='mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
<!--ヘッダー-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>最終課題</title>
    <link rel="stylesheet" href="./css/G1-1.css">
</head>
<body>
<div class="body">
    <div class="header0">
    <div class="name0">
      <img src="./img/logo.png" width="900" height="150">
    </div>
    <hr>
        &emsp;&emsp;
        
    <?php
        echo '<div class="name4">';
        echo '<h2>博多祝いめでた<br><audio controls controlslist="nodownload" src="./img/iwaimedeta.MP3"></audio></h2><br>';
        echo '</div><br><br>';
    ?> 
    </div>
   
    <hr>
        <!--ヘッダー-->
        <!--画面名-->
<div class="daimei">
        <h1>店舗一覧</h1>
<div class="button1">
    <button class="buttont" onclick="location.href='G1-2-1.php'">店舗登録</button>
</div>
</div><br>
    <!--画面名-->
    <!--テーブル-->
    <table>
    <tr><th>店舗ID</th><th>店舗名</th><th>郵便番号・住所</th><th>電話番号</th><th>店舗画像</th>
    <th>登録日</th><th>更新日</th><th>更新・削除</th></tr>
    <?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from Shop') as $row) {
        echo '<tr>';
        echo '<td>', $row['shop_id'], '</td>';
        echo '<td>', $row['shop_mei'], '</td>';
        echo '<td class="jusyo">', $row['postcode'],'<br>',$row['address'],'</td>';
        echo '<td>', $row['tel'], '</td>';
        echo '<td><img src="',$row['imgpath'],'" width="100" height="100" alt="店舗"></td>';
        echo '<td>', $row['torokubi'], '</td>';
        echo '<td>', $row['koshinbi'], '</td>';
        echo '<td>';
        echo '<form action="G3-1.php" method="post">';
        echo '<input type="hidden" name="shop_id" value="',$row['shop_id'],'">';
        echo '<div class="button2">';
        echo '<button type="submit">編集</button>';
        echo '</div>';
        echo '</form>';
        echo '<form action="G4-1.php" method="post">';
        echo '<input type="hidden" name="shop_id" value="',$row['shop_id'],'">';
        echo '<div class="button3">';
        echo '<button type="submit">削除</button>';
        echo '</div>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
    ?>
   </table>
    <!--テーブル-->
</div>
  </body>
  </html>