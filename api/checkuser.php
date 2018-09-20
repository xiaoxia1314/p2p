<?php
    //引入conn
    require_once('conn.php');
    //接收前端发过来的请求
    $username=$_POST['username'];
    //创建sql语句
    $sql="select * from userinfo where username='$username'";
    // echo $sql;
    //判断是否存在,为0不存在返回true
    $rs=mysqli_query($link,$sql);
    if(mysqli_num_rows($rs)==0){
        $result=['valid'=>true];
        echo json_encode($result);
    }else{
        $result=['valid'=>false];
        echo json_encode($result);
    }
    
    
   
?>