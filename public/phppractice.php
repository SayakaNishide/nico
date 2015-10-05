<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHPサンプル</title>
</head>
<body>
<p><?php
        //$ = pg_connect("host=localhost dbname=testdb user=SayakaNishide password=lesson");
        //if (!$link) {
          //  die('接続失敗です。'.pg_last_error());
        //}
        require_once 'phppractice.php';       
        //$con = DB::connect($dsn);
        //if(DB::isError($con)){
            //print("DBに接続できません");
        //}
        $dbconn = pg_connect("dbname=testdb");
    

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