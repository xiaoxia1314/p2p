<?php
    //连接数据库
    require_once('conn.php');
    //创建sql语句
    $sql="select * from borrowinfo";
    
    //创建数组
    $arrobj=[];
    $rs=mysqli_query($link,$sql);
    //检查出总条数
    $total=mysqli_num_rows($rs);
    //接收前端发送的数据
    $pageIndex=$_GET['pageIndex'];
    $pageSize=$_GET['pageSize'];
    //限制跳过的条数
    $tipe=$pageIndex*$pageSize;
    //构造语句
    $sql.=" limit $tipe,$pageSize";
    // var_dump($rs);
    // var_dump($result);
    $rs=mysqli_query($link,$sql);   
    while($result=mysqli_fetch_assoc($rs)){
        array_push($arrobj,$result);
    }
    $obj=["data"=>$arrobj,"total"=>$total];
    echo json_encode($obj);
   

?>