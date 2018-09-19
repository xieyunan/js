<?php
header("Content-type:text/html;charset=utf-8");
require "./commont.php";
 $uName = $_POST['uName'];
 $face = $_POST['face'];
 $sTitle = $_POST['sTitle'];
 $con = $_POST['con'];

 $id = $_GET['id'];
// $res = $m->query("delete * from bbs where id='$id'");


//更新数据
$res = $m->query("update bbs set uName = '$uName', face = '$face', sTitle = '$sTitle', con = '$con' where id='$id' ");
//结果集

if($res){
    echo "<script> window.location.href='show.php'</script>";
}else{
    echo "失败";
}

?>