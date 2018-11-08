<?php

//mysqli(服务器IP, 用户名, 密码, 数据库名) 连接数据库
$m = new mysqli("localhost","root","root","myone");

//结果集
$res = $m->query("select * from mytb");

//从结果集得到一条记录==>转换数组
/* $row = $res->fetch_assoc();//将结果集中的记录转换为关联数组
    echo '<pre>';
        print_r($row);
    echo '</pre>';

$row = $res->fetch_row();//索引
    echo '<pre>';
        print_r($row);
    echo '</pre>';

$row = $res->fetch_array();//索引和关联
    echo '<pre>';
        print_r($row);
    echo '</pre>'; */


while($row = $res->fetch_assoc()){
    echo '<pre>';
     print_r($row);
    echo '</pre>';
}

?>