<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHPサンプル</title>
</head>
<body>
<p><?php
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
        print("赤");
        }elseif($no == 2){
        print("青");
        }elseif($no == 3){
        print("白");}

        $nom[1] = "黄色";
        $nom[2] = "緑";
        $nom[3] = "黒";
        print($nom[$no]);

        if(is_numeric($_GET["age"]) == true){
        print("あなたは");
        print(htmlspecialchars($_GET["age"]));
        print("歳");
        }else{
        print("数字を入れてね<br/>");
        }

        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $a + $b;
        print $c;

?>

</p>
</body>
</html>