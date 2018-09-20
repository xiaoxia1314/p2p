<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./dist/css/personal.min.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/checksession.min.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- 引入头部-->
    <?php 
        require_once('header.php');
    ?>
    <div class="container" id="personal">
        <div class="row canvasoff" >
            <?php require_once('leftnav.php') ?>
            <!-- 账户信息-->
            <div class="col-sm-9 col-xs-12 rel">
            <button type="button" class="btn btn-primary"  id="perbtn"><span class="glyphicon glyphicon-chevron-right"></span></button>

            
                <div class="panel panel-default">
                    <div class="panel-body" id="person">
                        <!-- 头部的信息 -->
                        <div class="message clearfix">
                            <img src="./images/head_icon.jpg" alt="头像" class="img-thumbnail pull-left">  
                            <div class="info pull-left">
                                <p>昵 称：源代码教育</p>
                                <p>用户名：小强</p>
                                <p>最后登录时间：2016-10-25 15:30:10</p>
                            </div> 
                        </div>
                        <div class="row mg">
                            <div class="col-sm-4">总金额：<span>10000元</span></div>
                            <div class="col-sm-4">可用金额：<span>8000元</span></div>
                            <div class="col-sm-4">冻结金额：<span>2000元</span></div>
                        </div>
                        <!-- 充值和提交按钮 -->
                        <p class="talign">
                            <a href="recharge.php" class="btn btn-primary btn-lg">账户充值</a>
                            <a href="forward.php" class="btn btn-danger btn-lg">账户提现</a>
                        </p>

                        <!-- 认证 -->
                        <div class="row ident">
                            <!-- 实名认证 -->
                            <div class="col-md-4 col-xs-6 h120">
                                <div class="mes_right">
                                    <h5>实名认证</h5>
                                    <p>未认证<a href="real_name.php">马上认证</a></p>
                                </div>
                                <p>实名认证之后才能在平台投资</p>
                            </div>
                            <!-- 手机认证 -->
                            <div class="col-md-4 col-xs-6 h120">
                                <div class="mes_right bg1">
                                        <h5>手机认证</h5>
                                        <p>已认证<a href="#">查看</a></p>
                                </div>
                                <p>可收到系统信息并增加安全性</p>
                            </div>
                            <!-- 邮箱认证 -->
                            <div class="col-md-4 col-xs-6 h120">
                                <div class="mes_right bg2">
                                    <h5>邮箱认证</h5>
                                    <p>已认证<a href="#">查看</a></p>
                                </div>
                                <p>您可以设置邮箱接收重要信息</p>
                            </div>
                            <!-- vip -->
                            <div class="col-md-4 col-xs-6 h120">
                                <div class="mes_right bg3">
                                    <h5>VIP会员</h5>
                                    <p>普通用户<a href="#">查看</a></p>
                                </div>
                                <p>VIP会员，让你更快捷的投资</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- 引入尾部-->
    <?php 
    require_once('footer.php');
    ?>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./dist/js/index.min.js"></script>
<script src="./src/js/fold.js"></script>
<script></script>
</body>
</html>