<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        dl,dd,dt{margin: 0;padding: 0;}
        dl{width:600px;height: 300px;border: 1px solid red;}
        dt{width:100px;text-align: center;float: left;margin-top: 40px;}
        dt img{border: 1px solid #ccc;}
        dd{height: 38px;line-height: 38px;width: 480px;border: 1px solid #ccc;margin: 5px;float: right;}
        dt a{float: right;margin: 5px;color: #333;text-decoration: none;}
        dd:nth-of-type(2){height: 100px;}
    </style>
</head>
<?php
    require "./commont.php";
    $res = $m->query("select * from bbs order by  sTime desc");

?>
<body>
    <?php
    while($r = $res->fetch_assoc()){
    
    ?>
    <dl>
        <dt><img src="face/<?php echo $r["face"] ?>" />
        <p>用户名:<?php echo $r["uName"]?></p>
        <a href="del.php?id=<?php echo $r["id"] ?>">删除</a>
        <a href="update.php?id=<?php echo $r["id"]?>">修改</a>
        </dt>
        <dd>
           留言标题:<?php echo $r["sTitle"] ?> 
        </dd>
        <dd>
            留言内容:<?php echo $r["con"] ?>
        </dd>
        <dd>
            留言时间：<?php echo $r["sTime"]?>
        </dd> 
    </dl>
    <?php
    }
    ?>
</body>
</html>