<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div,dl,dt,dd{margin: 0; padding: 0;}
        #show dl{width: 840px; height:220px; border-top:1px solid #ccc; border-bottom:1px solid #ccc;  margin:0 auto; }
        #show dt{  height: 200px; width:140px; padding:20px 0 0 20px;  float:left;}
        #show dd{ width: 600px; height: 30px; border:1px solid #ddd; margin:10px 0 0 40px; float:right; font: 14px/30px "黑体"; padding-left:10px;}
        #show dd:nth-child(3){height: 100px;}
        #show dd a{ text-decoration: none; color:#333;  font-size:14px; }    
    </style>
</head>
<body>
<?php
require "./common.php";

$res = $m->query("select * from bbs order by sTime desc");
?>
   <div id="show">
<?php
while($row = $res->fetch_assoc()){
?>
       <dl>
           <dt>
               <img src="face/<?php echo $row['face']  ?>" />
               <p><?php echo $row['uName']  ?></p>
               <p>
                   <a href="update.php?id=<?php echo $row['id'] ?>">修改</a>
                   <a href="del.php?id=<?php echo $row['id']  ?>">删除</a>
                </p>
            </dt>
           <dd>标题: <?php echo $row['sTitle']  ?> </dd>
           <dd>内容: <?php echo $row['con']  ?></dd>
           <dd>发布时间: <?php echo $row['sTime']  ?></dd>
       </dl>
<?php
}
?>
   </div> 
</body>
</html> 