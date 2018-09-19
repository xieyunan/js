<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>  
</head>
<?php
require "./commont.php";

$id = $_GET['id']; 

$res = $m->query("delete from bbs where id='$id'");

if($res){
    echo "<script> window.location.href='show.php'</script>";
}else{
    echo "删除失败";
}
?>
<body>  
</body>
</html>