<?php
    //引入数据
    require_once('conn.php');
    //获取数据
    $borrowType=$_POST['borrowType'];
    $borrowAmount=$_POST['borrowAmount'];
    $currentRate=$_POST['currentRate'];
    $monthes2Return=$_POST['monthes2Return'];
    $repayment=$_POST['repayment'];
    $minAmount=$_POST['minAmount'];
    $maxAmount=$_POST['maxAmount'];
    $rewardAmount=$_POST['rewardAmount'];
    $disableDays=$_POST['disableDays'];
    $borrowTitle=$_POST['borrowTitle'];
    $description=$_POST['description'];
    session_start();
    //获取当前缓冲的id
    $id=$_SESSION['userid'];
    if($borrowType=='t1'){
        $borrowType='信用贷';
    }else if($borrowType=='t2'){
        $borrowType='车易贷';
    }else{
        $borrowType='房易贷';
    }
    //插入数据
    $sql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,userid) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$id)";
    $rs=mysqli_query($link,$sql);
    if($rs){
        $result=['isStatus'=>1,'message'=>"填写申请成功"];
        echo json_encode($result);
    }else{
        $result=['isStatus'=>0,'message'=>"填写申请失败"];
        echo json_encode($result);
    }
?>