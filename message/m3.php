<?php
header("Content-type:text/html; charset=utf-8");
//一.连接数据库
$m = new mysqli("localhost", "root", "root", "myone");

$m->query("set names utf8");
//二.执行SQL语句, 获取结果集
$res = $m->query("select * from mytb");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <table border="10">
      <tr>
          <td>学号</td>
          <td>姓名</td>
          <td>数学</td>
          <td>英文</td>
          <td>中文</td>
      </tr>
    <?php
//三.结果集转换成数组输出
while($row = $res->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['num']  ?></td>
          <td><?php echo $row['name']  ?></td>
          <td><?php echo $row['math']  ?></td>
          <td><?php echo $row['eng']  ?></td>
          <td><?php echo $row['chi']  ?></td>
      </tr>
    <?php
}
    ?>
  </table>  
</body>
</html>
