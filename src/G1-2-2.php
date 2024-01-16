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
        echo '<h2>博多祝いめでた<br><audio controls controlslist="nodownload" src="./img/iwaimedeta.MP3"></audio></h2><br>';
        echo '</div><br><br>';
    ?> 
    </div>
   
    <hr>
        <!--ヘッダー-->
        <!--画面名-->
   <div class="daimei">
        <h1>店舗登録判定</h1>
</div>
<br>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into Shop(shop_mei,postcode,address,tel,imgpath,torokubi)values(?,?,?,?,?,CURRENT_DATE)');
    if(empty($_POST['shop_mei'])){
        echo '<font color="red" font size=30px>店舗名を入力してください。</font>';
    }else if(empty($_POST['postcode'])){
        echo '<font color="red" font size=30px>郵便番号を入力してください。</font>';
    }else if(empty($_POST['address'])){
        echo '<font color="red" font size=30px>住所を入力してください。</font>';
    }else if(empty($_POST['tel'])){
        echo '<font color="red" font size=30px>電話番号を入力してください。</font>';
    }else if($sql->execute([$_POST['shop_mei'],$_POST['postcode'],$_POST['address'],$_POST['tel'],$_POST['imgpath']])){
        echo '<font color="red" font size=30px>登録に成功しました。</font>';
    }else {
        echo '<font color="red" font size=30px>登録に失敗しました。</font>';
    }
?>
<br><br>
<form action="G1-1.php" method="post">
        <button type="submit">店舗一覧へ戻る</button>
</form>
</body>
</html>
