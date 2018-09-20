<?php
    //连接数据库
    require_once('./conn.php');
    session_start();
    //获取当前缓冲的id
    $id=$_SESSION['userid'];
    $sql="select * from userinfo where userid=$id";
    $rs=mysqli_query($link,$sql);
    // if()
    //显示出来
    $result=mysqli_fetch_assoc($rs);
    if($result["birthDate"]){
        echo json_encode($result);
    }else{
        $obj=["isStatus"=>0,"message"=>"没有实名认证","username"=>$result["username"]];
        echo json_encode($obj);
    }
?>