<?php
require "./common.php";

//得到删除 ID
$id = $_GET['id'];
$res = $m->query("delete from bbs where id='$id'");

if($res){
    echo "<script>window.location.href='show.php';</script>";
}else{
    echo "error";
}
?>