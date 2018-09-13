<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./lib/bootstrapvalidator/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="./dist/css/register.min.css">

    <title>Document</title>
</head>
<body>

<?php
    require_once('topnav.php');
?>
<!-- 子导航 -->
<nav class="navbar navbar-default">
  <div class="container h70">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!-- logo图标 -->
      <a class="navbar-brand" href="#">
        <img src='./images/logo.png'>
      </a>
      <span>用户登录</span>
    </div>
  </div>
</nav>

<!-- 内容 -->
<div class="container reglogin">
    <div class="panel panel-default">
    <div class="panel-heading">用户登录</div>
    <div class="panel-body">
        
         <form class="form-horizontal" id="regForm">
             <!-- 用户名 -->
            <div class="form-group">
                <label class="col-sm-3 control-label">用户名</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name='username'  placeholder="请输入用户名" autocomplete="off">
                </div>
            </div>
            <!-- 密码 -->
            <div class="form-group">
                <label class="col-sm-3 control-label">密码</label>
                <div class="col-sm-9">
                <input type="password" class="form-control" name='password' placeholder="请输入密码" >
                </div>
            </div>
            <!-- 登录的按钮 -->
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-7">
                <button type="submit" class="btn btn-success">登录</button>
                <a href="login.php" class="">新用户,马上注册</a>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>

<?php
    require_once('footer.php');
?>
    
        

<script src="./lib/jquery/jquery.min.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./lib/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="./dist/js/index.min.js"></script>
<script src="./dist/js/register.min.js"></script>
</body>
</html>