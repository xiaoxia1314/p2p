<?php
    //连接数据库
    require_once('conn.php');
     //获取session中的用户id
     session_start();
     //获取当前缓冲的id
     $userid=$_SESSION['userid'];
     $data=[
        ["value"=>0,"name"=>"信用贷"],
        ["value"=>0,"name"=>"车易贷"],
        ["value"=>0,"name"=>"房易贷"]
    ];
    //创建sql语句
    $sql="select * from borrowinfo where userid=$userid";
    $rs=mysqli_query($link,$sql);
     while($result=mysqli_fetch_assoc($rs)){
        if($result["borrowType"]=='信用贷'){
            $data[0]["value"] += $result["borrowAmount"];
        }
        else if($result["borrowType"]=='车易贷'){
            $data[1]["value"] += $result["borrowAmount"];
        }
        else if($result["borrowType"]=='房易贷'){
            $data[2]["value"] += $result["borrowAmount"];
        }
    }
    $obj=["data"=>$data,"title"=>["信用贷","车易贷","房易贷"]];
    echo json_encode($obj);
?>