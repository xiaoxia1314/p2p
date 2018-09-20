<?php
    //引入conn
    require_once('conn.php');
    //接收前端发过来的请求
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    //创建sql语句
    $sql="select * from userinfo where username='$username' and pwd='$password'";
    $result=mysqli_query($link,$sql);
    $rs=mysqli_fetch_assoc($result);
    if($rs != null){
        //创建session
        session_start();
        //保存session字段
        $_SESSION['userid']=$rs["userid"];
        $_SESSION['username']=$rs["username"];
        $rs=['isStatus'=>1,'message'=>"用户登录成功"];
        echo json_encode($rs);
    }else{
        $rs=['isStatus'=>0,'message'=>"用户登录失败"];
        echo json_encode($rs);
    }

?>