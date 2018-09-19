<?php 
 header("Content-type:text/html;charset=utf-8");
 $a =new mysqli("localhost","root","root","myone");
 $res=$a->query("select * from mytb");
 $row=$res->fetch_assoc();

 echo $row['num']."-".$row['name']."-".$row['chi']."-".$row['eng']."-".$row['math'].'</br>';

 
?>