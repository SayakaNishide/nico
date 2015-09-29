<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>練習場所</title>
</head>
<body>
<?php
$con = mysql_connect('127.0.0.1', 'root', '1234');
if (!$con) {
  exit('データベースに接続できませんでした。');
}

$result = mysql_select_db('phpdb', $con);
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysql_query('SET NAMES utf8', $con);
if (!$result) {
  exit('文字コードを指定できませんでした。');
}

$result = mysql_query('SELECT able!= null FROM places', $con);
while ($data = mysql_fetch_array($result)) {
  echo '<p>' . $data['no'] . ':' . $data['name'] . ':' . $data['ward'] .':' . $data['mirror'] .':' . $data['piano'] .':' . " </p>\n";
}

$con = mysql_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}

?>
</body>
</html>