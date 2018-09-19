<?php 
header("Content-type:text/html;charset=utf-8");

$a=new mysqli("localhost","root","root","myone");//连接数据库

$res = $a->query("select * from mytb");//结果集

while($row=$res->fetch_assoc()){//结果集转换成关联数组
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
// $row=$res->fetch_row();//结果集转换成索引数组
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
// $row=$res->fetch_array();//结果集：索引数组＋关联数组
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";

?>