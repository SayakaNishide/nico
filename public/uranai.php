<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>占い</title>
</head>
<body>
<p><?php
        print("占いの結果を出力するよ!<br />");
        $no = rand(1,5);
        if(is_numeric($_GET["age"]) == true){
        print(htmlspecialchars($_GET["age"]));
        print("歳のあなたの<br />");
        print("今日の運勢は、、、<br />");    
        }else{
        print("数字を入れてね<br />");
        }

        $res = $_GET["age"];
        while(5 < $res){
        $res = floor($res / $no);
        }
        if($res == 1){
            print("末吉");
        }else if($res == 2){
            print("中吉");
        }else if($res == 3){
            print("小吉");
        }else if($res == 4){
            print("吉");
        }else if($res == 5){
            print("凶");
        }else{print("大吉");}

?>

</p>
</body>
</html>