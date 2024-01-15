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
    <link rel="stylesheet" href="./css/G1-3-1.css">
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
        <h1>店舗更新</h1>
<div class="button1">
    <button class="buttont" onclick="location.href='G1-1.php'">戻る</button>
</div>
</div><br>
    <!--画面名-->
    <!--テーブル-->
    <table>
    <tr><th>店舗ID</th><th>店舗名</th><th>郵便番号・住所</th><th>電話番号</th><th>店舗画像</th>
    <th>登録日</th><th class="koshinbi">更新日</th><th>更新</th></tr>
<?php
    $pdo=new PDO($connect, USER, PASS);
	$sql=$pdo->prepare('select * from Shop where shop_id=?');
	$sql->execute([$_POST['shop_id']]);
	foreach ($sql as $row) {
        echo '<tr>';
		echo '<form action="G1-3-2.php" method="post">';
        echo '<td> ';
        echo '<input  class="id" type="hidden" name="shop_id" value="',$row['shop_id'],'">',$row['shop_id'];
		echo '</td> ';
		echo '<td>';
		echo '<input  class="mei" type="text"  name="shop_mei" value="', $row['shop_mei'], '">';
		echo '</td> ';
		echo '<td>';
		echo ' <input class="postcode" type="text" name="postcode" value="', $row['postcode'],'"><br>';
        echo ' <input class="address" type="text" name="address" value="', $row['address'], '">';
		echo '</td> ';
        echo '<td>';
		echo ' <input class="tel" type="text" name="tel" value="', $row['tel'], '">';
		echo '</td> ';
        echo '<td>';
		echo ' <input class="imgpath" type="text" name="imgpath" value="', $row['imgpath'], '">';
		echo '</td> ';
        echo '<td>';
		echo '<div class="torokubi">',$row['torokubi'],'</div>';
		echo '</td> ';
        echo '<td>';
		echo '<input class="koshinbi" type="hidden" name="koshinbi" value="',$row['koshinbi'],'">',$row['koshinbi'];
		echo '</td> ';
		echo '<td><input type="submit" value="更新"></td>';
		echo '</form>';
        echo '</tr>';
		echo "\n";
	}
?>
</table>
<br><br>
</body>
</html>