<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./lib/bootstrapvalidator/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="./dist/css/personal.min.css">
    <link rel="stylesheet" href="./dist/css/borrow_apply.min.css">
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
            <div class="col-sm-9 col-xs-12 rel box">
            <button type="button" class="btn btn-primary"  id="perbtn"><span class="glyphicon glyphicon-chevron-right"></span></button>
                <div class="panel panel-default">
                    <div class="panel-body">                       
                        <!-- 信用借款 -->
                        <div class="tips">
                            <h4>信用借款</h4>
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <p>授信额度：<span>2000</span></p>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <p>授信额度：<span>2000</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- 借款信息 -->
                        <div class="lead">
                            <p>借款信息<span>信用标</span></p>
                        </div>
                        <form class="form-horizontal" id="apply"  method="post">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">借款类型</label>
                            <div class="col-sm-9">
                                <div class="input-group let">
                                    <select class="form-control " name="borrowType">
                                        <option value="t1">信用贷</option>
                                        <option value="t2">车易贷</option>
                                        <option value="t3">房易贷</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- 借款金额 -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">借款金额</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control"  aria-describedby="basic-addon2" name="borrowAmount">
                                    <b class="input-group-addon" id="basic-addon2">元</b>
                                </div>
                            </div>
                        </div>
                        <!-- 借款利息 -->
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">借款利息</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" name="currentRate">
                                    <span class="input-group-addon" id="basic-addon2">%</span>
                                </div>
                            </div>
                        </div>
                        <!--借款期限  -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">借款期限</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                <select class="form-control" name="monthes2Return">
                                    <option>1</option>
                                    <option>3</option>
                                    <option>6</option>
                                    <option>9</option>
                                    <option>12</option>
                                    <option>24</option>
                                </select>
                                    <span class="input-group-addon" id="basic-addon2">月</span>
                                </div>
                            </div>
                        </div>
                        <!-- 还款方式 -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">还款方式</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="radio"   name="repayment" value="按月分期" checked>按月分期
                                    <input type="radio"  name="repayment" value="按月到期">按月到期
                                </div>
                            </div>
                        </div>
                        <!--最小投标  -->
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">最小投标</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control"  aria-describedby="basic-addon2" name="minAmount">
                                    <span class="input-group-addon" id="basic-addon2">元</span>
                                </div>
                            </div>
                        </div>
                         <!--最大投标  -->
                         <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">最大投标</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control"  aria-describedby="basic-addon2" name="maxAmount">
                                    <span class="input-group-addon" id="basic-addon2">元</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">投标奖金</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" name="rewardAmount">
                                    <span class="input-group-addon" id="basic-addon2">%</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">投标天数</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                <select class="form-control"name="disableDays">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                                    <span class="input-group-addon" id="basic-addon2">天</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">借款标题</label>
                            <div class="col-sm-9">
                            <input type="text"  class="form-control"  name="borrowTitle">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">借款描述</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success">提交申请</button>
                        
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
<script src="./src/js/fold.js"></script>
<script src="./dist/js/apply.min.js"></script>
<script>
    //获取地址栏的id
    var index=location.href.split('=')[1];
    $('#type').val(index);

</script>
</body>
</html>