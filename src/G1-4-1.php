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
    <link rel="stylesheet" href="./css/G1-4-1.css">
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
        <h1>店舗削除</h1>
<div class="button1">
    <button class="buttont" onclick="location.href='G1-1.php'">戻る</button>
</div>
</div><br>
    <!--画面名-->
    <!--テーブル-->
    <table>
    <tr><th class="id">店舗ID</th><th class="mei">店舗名</th><th class="address">郵便番号・住所</th><th class="tel">電話番号</th><th class="imgpath">店舗画像</th>
    <th class="torokubi">登録日</th><th class="koshinbi">更新日</th><th>削除</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
	$sql=$pdo->prepare('select * from Shop where shop_id=?');
	$sql->execute([$_POST['shop_id']]);
	foreach ($sql as $row) {
        echo '<tr>';
		echo '<form action="G1-4-2.php" method="post">';
        echo '<td> ';
        echo '<input type="hidden" name="shop_id" value="',$row['shop_id'],'">',$row['shop_id'];
		echo '</td> ';
		echo '<td>';
		echo  $row['shop_mei'];
		echo '</td> ';
		echo '<td>';
		echo  '<div class="postcode">',$row['postcode'],'</div><br>';
        echo  '<div class="address2">',$row['address'],'</div>';
		echo '</td> ';
        echo '<td>';
		echo  $row['tel'];
		echo '</td> ';
        echo '<td>';
		echo  $row['imgpath'];
		echo '</td> ';
        echo '<td>';
		echo  $row['torokubi'];
		echo '</td> ';
        echo '<td>';
		echo '<input type="hidden" name="koshinbi" value="',$row['koshinbi'],'">',$row['koshinbi'];
		echo '</td> ';
		echo '<td><button type="submit" value="削除">削除</button></td>';
		echo '</form>';
        echo '</tr>';
		echo "\n";
	}
?>
</table>
<br><br>
</body>
</html>
