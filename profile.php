<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./lib/bootstrapvalidator/css/bootstrapValidator.min.css">    
    <link rel="stylesheet" href="./dist/css/real.min.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/checksession.min.js"></script>
    <link rel="stylesheet" href="./dist/css/personal.min.css">
    
    
    <title>Document</title>
</head>
<body>
    <!-- 引入头部-->
    <?php 
        require_once('header.php');
    ?>
    <div class="container" id="personal">
        <div class="row canvasoff">
             <!-- 引入左侧 -->
             <?php require_once('leftnav.php') ?>
            <!-- 内容 -->
            <div class="col-sm-9 col-xs-12 rel" >
            <button type="button" class="btn btn-primary"  id="perbtn"><span class="glyphicon glyphicon-chevron-right"></span></button>
            
                <div class="panel panel-default">
                    <div class="panel-heading">个人资料</div>
                    <div class="panel-body">
                        <form class="form-horizontal" id="profile">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                                <div class="col-sm-9">
                                     <!-- <input type="email" class="form-control" name="username" > -->
                                     <p>小强</p>
                                </div>
                            </div>
                            <!-- 姓名 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">真实姓名</label>
                                <div class="col-sm-9">
                                <input type="text" name="realname" class="form-control">
                                </div>
                            </div>
                            <!-- 证件号码 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">证件号码</label>
                                <div class="col-sm-9">
                                    <input type="text" name="idcard" class="form-control">      
                                </div>
                            </div>
                             <!-- 手机号码 -->
                             <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">手机号码</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tel" class="form-control">      
                                </div>
                            </div>
                            <!-- 联系电话 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">联系电话</label>
                                <div class="col-sm-9">
                                    <input type="text" name="mobile" class="form-control">      
                                </div>
                            </div>
                            <!-- 个人学历 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">个人学历</label>
                                <div class="col-sm-9">
                                <select class="form-control" name='edu'>
                                    <option>初中</option>
                                    <option>中专/高中</option>
                                    <option>专科</option>
                                    <option>本科</option>
                                    <option>硕士研究生</option>
                                    <option>博士研究生</option>
                                </select>
                                </div>
                            </div>
                            <!-- 个人收入 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">个人收入</label>
                                <div class="col-sm-9">
                                <select class="form-control" name='income'>
                                    <option>1000元以下</option>
                                    <option>1000-1999元</option>
                                    <option>2000-2999元</option>
                                    <option>3000-4999元</option>
                                    <option>5000-8999元</option>
                                    <option>10000元以上</option>
                                </select>
                                </div>
                            </div>

                            <!-- 联系地址 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">联系地址</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10">
                                <button type="submit" class="btn btn-primary">保存数据</button>
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
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./lib/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="./dist/js/index.min.js"></script>
<script src="./dist/js/profile.min.js"></script>
<script src="./src/js/fold.js"></script>
<script>
    
</script>
</body>
</html>