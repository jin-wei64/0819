<?php
header("content-type:text/html; charset=utf-8"); //PHP 送 Header 告訴瀏覽器這頁是 UTF-8 編碼

// 0. 請先建立 Class 資料庫 （SetupDB/setup_class.txt）

$link = mysqli_connect("127.0.0.1" ,"root" ,"root" ,null ,8889) or die(mysqli_connect_error());
// var_dump($link);
$result = mysqli_query($link ,"set names utf8");
mysqli_select_db($link, "class");
// var_dump($result);

$commandText = "select * from students ;";
$result = mysqli_query($link, $commandText);
// var_dump($result); 

// $row = mysqli_fetch_assoc($result);
// var_dump($row);

while($row = mysqli_fetch_assoc($result)) {
    echo "ID : {$row['cID']} <br>";
    echo "Name :{$row['cName']}<br>";
    echo "<hr>";
}
echo "<br />-- Done --";



// 1. 連接資料庫伺服器                                               //結束並顯示錯誤
// $link = @mysqli_connect("127.0.0.1", "root", "root", null, 8889) or die(mysqli_connect_error());
// var_dump($link);
// $result = mysqli_query($link, "set names utf8");
// mysqli_select_db($link, "class");

// 2. 執行 SQL 敘述
// $commandText = "select * from students";
// $result = mysqli_query($link, $commandText);

// 3. 處理查詢結果
// while ($row = mysqli_fetch_assoc($result))
// {
//   echo "ID：{$row['cID']}<br>";
//   echo "Name：{$row['cName']}<br>";
//   echo "<HR>";
// }

// 4. 結束連線
// mysqli_close($link);
?>
