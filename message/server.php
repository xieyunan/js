<?php
header("Content-type:text/html; charset=utf-8");
require "./common.php";

//一.接收用户的信息 cotroller: 功能
$uName = $_POST['uName'];
$face = $_POST['face'];
$sTitle = $_POST['sTitle'];
$con = $_POST['con'];

//二.写库: 数据处理,SQL语句 model

$res = $m->query("insert into bbs(uName, face, sTitle, con, sTime) values('$uName', '$face', '$sTitle', '$con', '$sTime')");


if($res){//写库成功时,跳转到留言列表页
    echo "<script>window.location.href='show.php';</script>";
}else{
    echo "what's mean? 写库失败!";
}
/* ';
echo $res; */

?>