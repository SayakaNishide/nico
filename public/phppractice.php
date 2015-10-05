<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHPサンプル</title>
</head>
<body>
<p><?php
        
        $link = pg_connect("host=localhost dbname=testdb user=SayakaNishide password=password");
        if (!$link) {
        die('DB接続失敗'.pg_last_error());
        }
        print('接続に成功しました。<br>');

        $result = pg_query('SELECT place_no, place_name FROM place');
        if (!$result) {
        die('クエリーが失敗しました。'.pg_last_error());
        }

        for ($i = 0 ; $i < pg_num_rows($result) ; $i++){
        $rows = pg_fetch_array($result, NULL, PGSQL_ASSOC);
        print($rows['place_no']);
        print($rows['place_name']);
        }   
        
        $close_flag = pg_close($link);
        if ($close_flag){
        print('切断に成功しました。<br>');
        }



        $a = "Hello";
        $b = $a."Nico";
        $c = $a."World";
        print $a;
        print $b;
        print $c;

        $d = 1;
        $e = 3;
        $f = $d + $e;
        print $f;

//1行コメントアウト
/*
2行以上の
コメントアウト*/

//if文,while文,for文はいつも通り

        $g = array("H","e","l","l","o");
        print $g[0];
        print $g[3];

        $h = "He/l/l/o";
        $line = explode("/",$h);
        print $line[0];
        print $line[3];

        $Data = file("data.txt");
        print $Data[1];

 date_default_timezone_set('Asia/Tokyo');
        print (date("ただいまY年m月d日 H時i分s秒です。"));
        //http://www.phppro.jp/phpmanual/php/function.date.html
        $today = getdate();
        print($today["year"]);
        print $_GET["key"];

         $no = rand(1,3);
        if($no == 1){
        print("赤<br />");
        }elseif($no == 2){
        print("青<br />");
        }elseif($no == 3){
        print("白<br />");}

        $nom[1] = "黄色<br />";
        $nom[2] = "緑<br />";
        $nom[3] = "黒<br />";
        print($nom[$no]);

        if(is_numeric($_GET["age"]) == true){
        print("あなたは");
        print(htmlspecialchars($_GET["age"]));
        print("歳<br />");
        }else{
        print("数字を入れてね<br />");
        }
 
        $gen = floor($_GET["age"] / 10);
        print("あなたは");
        print($gen);
        print("0代<br />");

        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $a + $b;
        print $c;

?>

</p>
</body>
</html>