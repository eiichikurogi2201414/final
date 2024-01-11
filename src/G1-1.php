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
        echo '<h2>博多祝いめでた<br><audio controls autoplay controlslist="nodownload" src="../img/iwaimedeta.MP3"></audio></h2><br>';
        echo '</div><br><br>';
    ?> 
    </div>
    </div>
    <hr>
        <!--ヘッダー-->
        <!--画面名-->
<div class="daimei">
        <h1>店舗一覧</h1>
</div>
<div class="button3">
    <button onclick="location.href='shohintorokuG2-1.php'">店舗登録</button>
</div>
    <!--画面名-->
</div>
  </body>
  </html>