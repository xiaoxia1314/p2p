<?php
    session_start();
    if(isset($_SESSION['username'])){
        $rs=["isStatus"=>true,"message"=>'成功',"username"=>$_SESSION['username']];
        echo json_encode($rs);
    }else{
        $rs=["isStatus"=>false,"message"=>'没有登录,请登录后再来访问'];
        echo json_encode($rs);
    }
?>