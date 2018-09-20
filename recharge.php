<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./dist/css/register.min.css">
    <link rel="stylesheet" href="./dist/css/recharge.min.css">
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
            <span>账户充值</span>
            </div>
        </div>
    </nav>

    <!-- 充值 -->
    <div class="container">
        <!-- 充值提示 -->
       <div class="tips">
            <h4>账户充值</h4>
            <ol>
                <li>由于银行系统的限制，充值功能建议使用 IE 内核（IE8及以上）的浏览器。</li>
                <li>请注意：为打击信用卡套现行为，充值资金必须经过投资回款后方能允许提现。</li>
            </ol>
            <!-- <p>1. 由于银行系统的限制，充值功能建议使用 IE 内核（IE8及以上）的浏览器。</p>
            <p>2. 请注意：为打击信用卡套现行为，充值资金必须经过投资回款后方能允许提现。</p> -->
       </div>

       <!-- tab切换 -->
       <div class='way'>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">线上充值(第三方平台)</a></li>
                <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">线下充值</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="home">
                    <p>系统暂不支持，请采用线下充值</p>
                </div>
                <div role="tabpanel" class="tab-pane active" id="profile">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>银行名称</th>
                                <th>开户人姓名</th>
                                <th>银行账号</th>
                                <th>开户行支行名称</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span></span></td>
                                <td>源代码</td>
                                <td>62170038233428412750</td>
                                <td>府城大道支行</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="f18">第一步:</p>
                    <p>请选择往以上一个账号汇款或转账您所要充值的金额（若您是跨行转账，推荐选择建行）。注：请保存您的交易记录信息。</p>
                    <p class="f18">第二步:</p>
                    <p>款或转账成功后，再选择你所汇款或转账的账号，并填写以下完整的信息后，提交您的线下充值申请。我们将会在下个工作日核对您的申请。</p>
                    <form class="form-horizontal" id="regForm">
                        <!-- 银行 -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">银行</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="rank">
                                    <option>招商银行6212303810028412750(成都高新天府大道支行)</option>
                                    <option>农业银行6217003834411112750(成都天府新谷支行)</option>
                                </select>
                            </div>
                        </div>
                        <!-- 交易号 -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">交易号</label>
                            <div class="col-sm-4">
                            <input type="password" class="form-control" name='trade'>
                            </div>
                        </div>
                        <!-- 充值时间 -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">充值时间</label>
                            <div class="col-sm-4">
                            <input type="password" class="form-control datepicker" name='tradeTime'>
                            </div>
                        </div>
                        <!-- 充值金额 -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">充值金额</label>
                            <div class="col-sm-4">
                            <input type="text" class="form-control" name="money">
                            </div>
                        </div>
                        <!-- 说明 -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">说明</label>
                            <div class="col-sm-4">
                            <input type="text" class="form-control" name="explain">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary">确定提交</button>
                            </div>
                        </div>
                    </form>
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