<?php

//一.连接数据库
$m = new mysqli("localhost", "root", "root", "myone");

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