<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./dist/css/register.min.css">
    <link rel="stylesheet" href="./dist/css/forward.min.css">
    <title>Document</title>
</head>
<body>
    <!-- 引入头部-->
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
            <span>账户提现</span>
            </div>
        </div>
    </nav>

    <!-- 充值 -->
    <div class="container">
        <!-- 账户充值 -->
       <div class="tips">
            <h4>账户充值</h4>
            <ol>
                <li>本平台工作日会处理当天 17:00 之前的提款申请。</li>
                <li>为了确保银行转账成功，请您确认银行账号信息的 正确性。</li>
                <li>单笔提现范围-普通用户500.00 元 ~ 500000.00 元。</li>
                <li>单笔提现范围-VIP用户500.00 元 ~ 500000.00 元。</li>
                <li>目前提现服务费：1万元(含) 之内：2.00 元/笔；1万元（以上） ：5.00 元/笔。</li>
                <li>为避免信用卡套现，故充值15日内未投资提现按提现金额的0.4%收取提现费用。</li>
                <li>本次可提现 = 可用余额 - 净值保证金 - 不可提现金额 + 投标冻结 - 最高服务费 - 返还体验金</li>
            </ol>
       </div>
       <div class="row">
            <div class="col-sm-4">
                <p>总金额：<span>10000元</span></p>
            </div>
            <div class="col-sm-4">
                <p>可提现金额：<span>8000元</span></p>
            </div>
            <div class="col-sm-4">
                <p>冻结金额：<span>2000元</span></p>
            </div>
        </div>

         <form class="form-horizontal" id="regForm">
            <!-- 银行 -->
            <div class="form-group">
                <label class="col-sm-3 control-label">银行</label>
                <div class="col-sm-4">
                    <select class="form-control" name="rank">
                        <option>工商银行</option>
                        <option>农业银行</option>
                        <option>建设银行</option>
                        <option>招商银行</option>
                        <option>中国银行</option>
                    </select>
                </div>
            </div>
            <!-- 开户行 -->
            <div class="form-group">
                <label class="col-sm-3 control-label">开户行</label>
                <div class="col-sm-4">
                <input type="password" class="form-control" name='open'>
                </div>
            </div>
            <!-- 银行卡号 -->
            <div class="form-group">
                <label class="col-sm-3 control-label">银行卡号</label>
                <div class="col-sm-4">
                <input type="password" class="form-control datepicker" name='care'>
                </div>
            </div>
            <!-- 户主姓名 -->
            <div class="form-group">
                <label class="col-sm-3 control-label">户主姓名</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" name="name">
                </div>
            </div>
            <!-- 提现金额 -->
            <div class="form-group">
                <label class="col-sm-3 control-label">提现金额</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" name="money">
                </div>
            </div>
                <!-- 通知电话 -->
                <div class="form-group">
                <label class="col-sm-3 control-label">通知电话</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" name="tel">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary">确定提交</button>
                </div>
            </div>
        </form>
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