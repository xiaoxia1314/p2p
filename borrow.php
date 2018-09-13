<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./dist/css/borrow.min.css">
    <title>Document</title>
</head>
<body>
    <!-- 引入头部 -->
    <?php 
      include_once("./header.php");
    ?>
    <!-- <div class="container">
        <h4>投资列表</h4>

        <div class="btn-group" role="group" aria-label="...">
            <button type="button" class="btn btn-default">全部</button>
            <button type="button" class="btn btn-default">招标中</button>
            <button type="button" class="btn btn-default">还款中</button>
        </div>

    </div> -->
    <div class="container" id="application">
        <div class="row">
            <!-- 信用贷 -->
            <div class="col-sm-4">
                <!-- 面板 -->
                <div class="panel panel-default">
                    <div class="panel-heading bg1">信用贷</div>
                    <div class="panel-body">
                        <p>可借金额 ¥ 2,000.00</p>
                        <p><a href="#">申请条件</a></p>
                        <p>仅限成都地区</p>
                        <ul>
                            <li>填写基本资料</li>
                            <li>身份认证</li>
                            <li>视频认证</li>
                        </ul>
                        <p class="talign"><a href="#" class="btn btn-primary">立即申请</a></p>
                    </div>
                </div>
            </div>
            <!-- 车易贷 -->
            <div class="col-sm-4">
                <!-- 面板 -->
                <div class="panel panel-default">
                    <div class="panel-heading bg2">车易贷</div>
                    <div class="panel-body">
                        <p>可借金额 ¥ 2,000.00</p>
                        <p><a href="#">申请条件</a></p>
                        <p>仅限成都地区</p>
                        <ul>
                            <li>填写基本资料</li>
                            <li>身份认证</li>
                            <li>视频认证</li>
                        </ul>
                        <p class="talign"><a href="#" class="btn btn-primary">立即申请</a></p>
                    </div>
                </div>
            </div>
            <!-- 房易贷 -->
            <div class="col-sm-4">
                <!-- 面板 -->
                <div class="panel panel-default">
                    <div class="panel-heading bg3">房易贷</div>
                    <div class="panel-body">
                        <p>可借金额 ¥ 2,000.00</p>
                        <p><a href="#">申请条件</a></p>
                        <p>仅限成都地区</p>
                        <ul>
                            <li>填写基本资料</li>
                            <li>身份认证</li>
                            <li>视频认证</li>
                        </ul>
                        <p class="talign"><a href="#" class="btn btn-primary">立即申请</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 引入尾部 -->
    <?php 
     include_once("./footer.php");
    ?>
<script src="./lib/jquery/jquery.min.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./dist/js/index.min.js"></script>
</body>
</html>