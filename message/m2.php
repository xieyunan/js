<?php
/**
 * PHP与mysql中文乱码解决办法:
 * 1.mysql创建数据库时使用utf-8;
 * 2.php开发工具文档编码使用utf-8;
 * 3.指定浏览器输出编码为utf-8
 * header("Content-type:text/html; charset=utf-8");
 * 4.指定mysql输出字符集为utf-8;
 * $m->query("set names utf8");
 */
header("Content-type:text/html; charset=utf-8");
//一.连接数据库
$m = new mysqli("localhost", "root", "root", "myone");

$m->query("set names utf8");
//二.执行SQL语句, 获取结果集
$res = $m->query("select * from mytb");

//三.结果集转换成数组输出
while($row = $res->fetch_assoc()){
    echo $row['num'].' '.$row['name'].' '.$row['eng'].'<br />';
    /* echo '<pre>';
     print_r($row);
    echo '</pre>'; */
}
?>