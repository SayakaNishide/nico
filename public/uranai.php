<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>占い</title>
</head>
<body>
<p><?php
        $no = rand(1,5);
        if(is_numeric($_GET["age"]) == true){
        print("あなたは");
        print(htmlspecialchars($_GET["age"]));
        print("歳<br />");
        }else{
        print("数字を入れてね<br />");
        }

        $res = $_GET["age"];
        while(5 <= $res){
        $res = floor($res / $no);
        }
        if($res < 1){
            print("今日は末吉");
        }else if(1 <= $res && $res < 2){
            print("今日は中吉");
        }else if(2 <= $res && $res < 3){
            print("今日は小吉");
        }else if(3 <= $res && $res < 4){
            print("今日は吉");
        }else if(4 <= $res && $res < 5){
            print("今日は凶");
        }else{print("今日は大吉");}

?>

</p>
</body>
</html>