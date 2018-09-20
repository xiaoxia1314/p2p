<?php
    //连接数据库
    require_once('conn.php');
    //获取session中的用户id
    session_start();
    //获取当前缓冲的id
    $id=$_SESSION['userid'];
    //创建sql语句
    $sql="select * from borrowinfo where userid=$id";
    //创建数组
    $arrobj=[];
    $rs=mysqli_query($link,$sql);
    // var_dump($rs);
    // var_dump($result);
    while($result=mysqli_fetch_assoc($rs)){
        array_push($arrobj,$result);
    }
    echo json_encode($arrobj);
   

?>