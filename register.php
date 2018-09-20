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
      <span>用户注册</span>
    </div>
  </div>
</nav>

<!-- 内容 -->
<div class="container reglogin">
    <div class="panel panel-default">
    <div class="panel-heading">用户注册</div>
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
            <!-- 确定密码 -->
            <div class="form-group">
                <label class="col-sm-3 control-label">确定密码</label>
                <div class="col-sm-9">
                <input type="password" class="form-control" name='checkpwd' placeholder="请确认密码">
                </div>
            </div>
            <!-- 邮箱 -->
            <div class="form-group">
                <label class="col-sm-3 control-label">邮箱</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="email" placeholder="请输入Email">
                </div>
            </div>
            <!-- 手机号码 -->
            <div class="form-group">
                <label class="col-sm-3 control-label">手机号码</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="phone" placeholder="请输入手机号码">
                </div>
            </div>
            <!-- 头像 -->
            <!-- <div class="form-group">
                <label for="exampleInputFile" class="col-sm-3 control-label">File input</label>
                <div class="col-sm-9">
                    <input type="file" id="exampleInputFile" name='filepic'>
                </div>
            </div> -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success">注册</button>
                <a href="login.php" class="">已有账号,马上登陆</a>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>

<?php
    require_once('footer.php');
?>

<!-- 模态框 -->
<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="regModalTitle">标题</h4>
      </div>
      <div class="modal-body" id='regModalContent'>
       内容
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="tologin" data-dismiss="modal">跳转到登录页面</button>
      </div>
    </div>
  </div>
</div>
        

<script src="./lib/jquery/jquery.min.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./lib/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="./dist/js/index.min.js"></script>
<script src="./dist/js/register.min.js"></script>
<script>
    $('#tologin').on('click',function(){
        location.href='./login.php';
    })
</script>
</body>
</html>