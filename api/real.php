<?php
    session_start();
    //引入数据库
    require_once('conn.php');
    //获取当前用户session的id
    $id=$_SESSION['userid'];
    //获取表单传过来的值
    $realname=$_POST['realname'];
    $sex=$_POST['sex'];
    $type=$_POST['type'];
    $idcard=$_POST['idcard'];
    $birthDate=$_POST['birthDate'];
    $address=$_POST['address'];
    //创建sql语句
    // $sql="insert into userinfo(realname,sex,type,idcard,birthDate,address) values('$realname','$sex','$type','$idcard','$birthDate','$address') where id=$id";
    // 更新数据库
    $sql="update userinfo set realname='$realname',sex='$sex',type='$type',idcard='$idcard',birthDate='$birthDate',address='$address' where userid=$id";
    $rs=mysqli_query($link,$sql);
    if($rs==1){
        $result=['isStatus'=>1,'message'=>'认证成功'];
        echo json_encode($result);
    }else{
        $result=['isStatus'=>0,'message'=>'认证失败'];
        echo json_encode($result);
    }
?>