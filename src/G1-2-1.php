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
    <link rel="stylesheet" href="./css/G1-2-1.css">
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
        <h1>店舗登録</h1>
<div class="button1">
    <button class="buttont" onclick="location.href='G1-1.php'">戻る</button>
</div>
</div><br>
    <!--画面名-->
<!--テーブル-->
<form action = "G1-2-2.php" method ="post">
<div class="input">
            <div class="table1">店舗名</div><div class="table2"><input type = "text" size="75" name="shop_mei" placeholder=" 例：焼肉大将"></div><br><br>
</div>
<div class="input">
            <div class="table1">郵便番号</div><div class="table2"><input type="text" size="75" name="postcode" placeholder=" 例：812-0011（ハイフンあり）"></div><br><br>
</div>
<div class="input">
            <div class="table1">住所</div><div class="table2"><input type="text" size="75" name="address" placeholder=" 例：福岡県福岡市博多区博多駅中央街1-1-1"></div><br><br>
</div>
<div class="input">
            <div class="table1">電話番号</div><div class="table2"><input type="text" size="75" name="tel" placeholder=" 例：900-900-9000（ハイフンあり）"></div><br><br>
</div>
<div class="input">
            <div class="table1">画像パス</div><div class="table2"><input type="text" size="75" name="imgpath" placeholder=" 例：img/00.png"></div><br><br>
</div>
<!--テーブル-->
&emsp;&emsp;
<div class="buttont2">
<button class="button" type="submit">登録する</button>
</div>
&emsp;&emsp;&emsp;&emsp;&emsp;
</form>
</body>
</html>