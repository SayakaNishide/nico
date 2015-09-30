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

        print $_GET["key"];

?>

</p>
</body>
</html>