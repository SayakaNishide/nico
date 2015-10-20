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



        for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
            $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
            if($_GET["ward"] == null){
                //print($_GET["ward"]);
                //print("を含む施設：<br />");
                if($_GET["name"] == $rows['place_name']){  
                print("施設番号：");          
                print($rows['place_no']);
                print("<br />施設名：");   
                print($rows['place_name']);
                print('<br />');}
            }else if($_GET["name"] == null){
                print($_GET["ward"]);
                print("にある施設：<br />"); 
                if($_GET["ward"] == $rows['place_ward']){ 
                print("施設番号：");      
                print($rows['place_no']);
                print("<br />施設名：");  
                print($rows['place_name']);
                print('<br />');}
            }else if($_GET["ward"] == $rows['place_ward'] && $_GET["name"] == $rows['place_name']){ 
                //print("条件に合う施設<br />");
                //print("施設番号:");           
                print($rows['place_no']);
                print("<br />施設名："); 
                print($rows['place_name']);
                print('<br />');
            }else{
                print("条件に合う施設はありません");
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