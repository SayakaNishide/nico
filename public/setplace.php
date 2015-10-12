<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>場所登録</title>
</head>
<body>
<p><?php
        
        $link = pg_connect("host=localhost dbname=testdb user=SayakaNishide password=password");
        if (!$link) {
        die('DB接続失敗'.pg_last_error());
        }
        $result = pg_query('SELECT * FROM place');
        if (!$result) {
        die('クエリーが失敗しました。'.pg_last_error());
        }
        $name = $_GET["set_name"];
        $ward = $_GET["set_ward"];
        $no = $_GET["set_no"];
        $able = $_GET["set_able"];
        $mirror = $_GET["set_mirror"];
        $piano = $_GET["set_piano"];
        $cost = $_GET["set_cost"];
        $sql = "INSERT INTO place (place_no, place_name, place_able, place_ward, mirror, piano, cost) VALUES ($no, '$name', $able, '$ward', $mirror, $piano, $cost)";
        $result_flag = pg_query($sql);
        if (!$result_flag) {
        die('INSERTクエリーが失敗しました。'.pg_last_error());
        }
        print('<br>データを追加しました<br>');
        header( "Refresh: 1; Location: setplace.html" );
        $close_flag = pg_close($link);
        if (!$close_flag){
            print('切断失敗<br>');
        }
        
?>

</p>
</body>
</html>