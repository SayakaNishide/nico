<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>番号計算</title>
</head>
<body>
<p><?php
        $bangoumax = floor($_GET["hirosa"] / 180);
        $memplusone = $_GET["memno"] + 1;
        $kankakuku = $_GET["hirosa"] / $memplusone;
        $kankaku = $kankakuku / 90;
        if($_GET["memno"] % 2 == 0){
           $ichi = $kankaku / 2;
           print $ichi;
           print ("<br />");
           $ichi = $ichi + $kankaku;
           while($ichi < $bangoumax){
            print $ichi;
            print ("<br />");
            $ichi = $ichi + $kankaku;
           }
        }else{
            print ("0<br />");
            $ichi = $kankaku;
            print $ichi;
            print ("<br />");
            $ichi = $ichi + $kankaku;
            while($ichi < $bangoumax){
                print $ichi;
                print ("<br />");
                $ichi = $ichi + $kankaku;
            }
        }

?>

</p>
</body>
</html>