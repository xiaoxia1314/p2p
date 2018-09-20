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
                    <div class="panel-heading">我的借款</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>标题</th>
                                    <th>时间</th>
                                    <th>借款金额(元)</th>
                                    <th>期限</th>
                                    <th>利率</th>
                                    <th>状态</th>
                                </tr>
                            </thead>
                            <tbody id="borrowDate">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- 引入尾部-->
    <?php 
    require_once('footer.php');
    ?>
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./lib/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="./dist/js/borrow_list.min.js"></script>
<script src="./dist/js/index.min.js"></script>
<script src="./dist/js/profile.min.js"></script>
<script src="./src/js/fold.js"></script>
<!-- 定义模板-->
<script type="text/html" id="borrowTelp">
    <tr>
        <td>
            <a target="_blank" href="borrow_info.html">${borrowTitle}</a>
        </td>
        <td>${submitDatetime}</td>
        <td>${borrowAmount}</td>
        <td>${monthes2Return}月</td>
        <td>${currentRate}%</td>
        <td>
            <label class="text-muted">待发布</label>
        </td>
    </tr>
</script>
</body>
</html>