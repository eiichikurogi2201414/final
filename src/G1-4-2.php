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
    <link rel="stylesheet" href="./css/G1-2-2.css">
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
        echo '<h2>博多祝いめでた<br><audio controls autoplay controlslist="nodownload" src="./img/iwaimedeta.MP3"></audio></h2><br>';
        echo '</div><br><br>';
    ?> 
    </div>
   
    <hr>
        <!--ヘッダー-->
        <!--画面名-->
   <div class="daimei">
        <h1>店舗削除判定</h1>
</div>
<br>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from Shop where shop_id=?');
    if($sql->execute([$_POST['shop_id']])){
        echo '<font color="red" font size=30px>削除に成功しました。</font>';
    }else{
        echo '<font color="red" font size=30px>削除に失敗しました。</font>';
    }
?>
<br><br>
<br><br>
    <button onclick="location.href='G1-1.php'">店舗一覧へ戻る</button>
    </body>
</html>