<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>場所表示</title>
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

        print("検索結果:<br />");

        for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
            $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
            if(!$_GET["ward"]){
                if($_GET["name"] == $rows['place_name']){  
                    print("<br />施設名：");   
                    print($rows['place_name']);
                    print('<br />');
                    print("空いているか(空欄:空き　1:予約済み)：");
                    print($rows['place_able']);
                    print('<br />');
                }else if($_GET["ward"] != $rows['place_ward']){
                    print("条件に合う施設はありませんe");
                    break;
                }else if(!$_GET["name"]){
                    print("条件に合う施設はありませんa");
                    break;
                }
            }

            if(!$_GET["name"]){
                if($_GET["ward"] == $rows['place_ward']){ 
                    print("<br />施設名：");  
                    print($rows['place_name']);
                    print('<br />');
                    print("空いているか(空欄:空き　1:予約済み)：");
                    print($rows['place_able']);
                    print('<br />');
                }else if($_GET["ward"] != $rows['place_ward']){
                    print("条件に合う施設はありませんd");
                    break;
                }else if(!$_GET["ward"]){
                    print("条件に合う施設はありませんb");
                    break;
                }
            }

            if($_GET["ward"] == $rows['place_ward'] && $_GET["name"] == $rows['place_name']){       
                print("施設名："); 
                print($rows['place_name']);
                print('<br />');
                print("空いているか(空欄:空き　1:予約済み)：");
                print($rows['place_able']);
                print('<br />');
            }

            if ($_GET["ward"] != $rows['place_ward'] || $_GET["name"] != $rows['place_name']){
                print("条件に合う施設はありませんc");
                break;
            }
        }

        $close_flag = pg_close($link);
        if (!$close_flag){
            print('切断失敗<br>');
        }
        
?>

</p>
</body>
</html>