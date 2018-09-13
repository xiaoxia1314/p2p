<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./dist/css/invest.min.css">
    <title>Document</title>
</head>
<body>
    <!-- 引入头部 -->
    <?php 
        include_once("./header.php");
    ?>
    <div class="container" id="status">
        <h4>投资列表</h4>
        <!-- 选择状态 -->
        <div class='sign'>
            <span>标的状态</span>
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> 全部
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="options" id="option2" autocomplete="off">  招标中
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="options" id="option3" autocomplete="off"> 还款中
                </label>
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