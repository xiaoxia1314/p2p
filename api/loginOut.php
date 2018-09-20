<?php
    session_start();
    session_destroy();
    //跳转到登录页面
    echo "<script>location.href='../login.php';</script>";
?>