<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php 
 header("Content-type:text/html;charset=utf-8");
 $a =new mysqli("localhost","root","root","myone");
 $res=$a->query("select * from mytb");

?>
<body>
    <table border="5">
        <tr>
            <td>学号</td>
            <td>姓名</td>
            <td>国文</td>
            <td>英文</td>
            <td>数学</td>
        </tr>
    <?php
    while($row=$res->fetch_assoc()){
   
    
    ?>
        <tr>
            <td><?php echo $row["num"]?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["chi"]?></td>
            <td><?php echo $row["eng"]?></td>
            <td><?php echo $row["math"]?></td>
        </tr>
    <?php
    }    
    ?>
    </table>
</body>
</html>