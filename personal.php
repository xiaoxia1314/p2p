<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./dist/css/personal.min.css">
    <title>Document</title>
</head>
<body>
    <!-- 引入头部-->
    <?php 
        require_once('header.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <!-- 个人中心导航 -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <!-- 投资项目 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">投资项目</a>
                            </h4>
                        </div>
                        <!-- 下拉菜单 -->
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">  
                            <div class="panel-body">
                                <ul>
                                    <li><a href="#">投资项目</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 借款项目 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">借款项目</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">借款项目</a></li>
                                <li><a href="#">还款明细</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!-- 我的账户 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">我的账户</a>
                        </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">账户信息</a></li>
                                <li><a href="#">实名认证</a></li>
                                <li><a href="#">银行卡管理</a></li>
                                <li><a href="#">登录记录</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!-- 资产详情 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">资产详情</a>
                        </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">账户流水</a></li>
                                <li><a href="#">充值明细</a></li>
                                <li><a href="#">提现记录</a></li>
                                <li><a href="#">收款明细</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                     <!-- 个人资料 -->
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">个人资料</a>
                        </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">个人资料</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- 内容 -->
            <div class="col-sm-9 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">实名认证</div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                                <div class="col-sm-9">
                                     <input type="email" class="form-control" name="username" placeholder="Email">
                                </div>
                            </div>
                            <!-- 姓名 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">姓名</label>
                                <div class="col-sm-9">
                                <input type="text" name="name" class="form-control"  placeholder="Password">
                                </div>
                            </div>
                            <!-- 性别 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">性别</label>
                                <div class="col-sm-9">
                                <select class="form-control">
                                    <option>女</option>
                                    <option>男</option>
                                </select>
                                </div>
                            </div>
                            <!-- 证件类型 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">证件类型</label>
                                <div class="col-sm-9">
                                <select class="form-control">
                                    <option>身份证</option>
                                    <option>驾驶证</option>
                                    <option>军官证</option>
                                </select>
                                </div>
                            </div>
                           <!-- 证件号码 -->
                           <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">证件号码</label>
                                <div class="col-sm-9">
                                    <input type="text" name="number" class="form-control">
                                </div>
                            </div>

                            <!-- 出生日期 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">出生日期</label>
                                <div class="col-sm-9">
                                    <input type="text" name="data" class="form-control">
                                </div>
                            </div>

                            <!-- 证件地址 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">证件地址</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" class="form-control">
                                </div>
                            </div>

                            <!-- 身份证照片 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">身份证照片</label>
                                <div class="col-sm-9">
                                    <p class="text-help text-primary">请点击“选择图片”,选择证件的正反两面照片。</p>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10">
                                <button type="submit" class="btn btn-primary">提交按钮</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- 引入尾部-->
    <?php 
    require_once('footer.php');
    ?>
<script src="./lib/jquery/jquery.min.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./dist/js/index.min.js"></script>
</body>
</html>