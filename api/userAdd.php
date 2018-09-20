<?php
    //引入conn
    require_once('conn.php');
    //接收前端发过来的请求
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    // $filepic=$_POST['filepic'];
    //创建sql语句
    $sql="insert into userinfo(username,pwd,email,tel) values('$username','$password','$email','$phone')";
    // $sql="insert into userinfo(username,pwd,email,tel,pic) values('$username','$password','$email','$phone','$filepic')";

    $result=mysqli_query($link,$sql);
    if($result){
        $rs=['isStatus'=>1,'message'=>"注册成功"];
        echo json_encode($rs);
    }else{
        $rs=['isStatus'=>0,'message'=>"注册失败"];
        echo json_encode($rs);
    }

?>