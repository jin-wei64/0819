<?php
header("content-type:text/html; charset=utf-8");

// 0. 請先建立 Class 資料庫 （執行 class.sql）
$pdo = new PDO("mysql:host=127.0.0.1; dbname=class; port=8889", "root", "root");
$pdo->exec("set character utf8");
$sql = "select * from students";
$result = $pdo->query($sql);
while($row = $result->fetch()){
  echo "ID:{$row['cID']} <br>";
  echo "Name:{$row['cName']} <br>";
  echo "<hr>";
}
// 1. 連接資料庫伺服器
//$db = new PDO("mysql:host=localhost;dbname=class;port=3306", "root", "password");
//$db->exec("set names utf8");

// 2. 執行 SQL 敘述
//$result = $db->query("select * from students");

// 3. 處理查詢結果
/*
while ($row = $result->fetch())
{
  echo "ID：{$row['cID']}<br>";
  echo "Name：{$row['cName']}<br>";
  echo "<HR>";
}
*/

// 4. 結束連線
// $db = null;

echo "<br />-- Done --";
?>
