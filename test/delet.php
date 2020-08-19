<?php 
if (!isset($_GET["id"])){
    die("id not found.");
}
$id = $_GET["id"];
if(!is_numeric($id)){
    die("id not a number .");
}
$sql = "delete from employee where employeeId = $id" ;
require("config.php");
mysql_query($link,$sql);
header("location:index.php");
?>