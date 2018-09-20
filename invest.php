<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./dist/css/invest.min.css">
    <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
    <title>Document</title>
    <style>
        .page{
            text-align:right;
        }
        .m-pagination-info{
            display: none!important;
        }
    </style>
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
        <table class="table el-table table-hover">
			<thead id="gridHead">
				<tr>
					<th>借款人</th>
					<th width="180px">借款标题</th>
					<th>年利率</th>
					<th>金额</th>
					<th>还款方式</th>
					<th>进度</th>
					<th width="80px">操作</th>
				</tr>
			</thead>
			<tbody id="gridBody">
			</tbody>
		</table>
        <div class="page">
            <div id="page" class="m-pagination"></div>
        </div>
        
    </div>


    <!-- 引入尾部 -->
    <?php 
    include_once("./footer.php");
    ?>
<script src="./lib/jquery/jquery.min.js"></script>
<script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
<script src="./dist/js/index.min.js"></script>
<script src="./dist/js/invest.min.js"></script>

<!-- 定义模板-->
<script type="text/html" id="borrowTelp">
    <tr>
        <td>zs</td>
        <td>${borrowType}</td>
        <td class="text-info">${currentRate}</td>
        <td class="text-info">${borrowAmount}</td>
        <td>${repayment}</td>
        <td>100.00%</td>
        <td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=7">查看</a></td>
    </tr>
</script>

<script>
     $("#page").page({
            debug: true,
            showInfo: true,
            showJump: true,
            pageSize:5,
            showPageSizes: true,
            remote: {
                url: './api/invest.php',
                success: function (rs) {
                    //成功的回调
                    var htmlStr=$('#borrowTelp').tmpl(rs.data);
                    $('#gridBody').html(htmlStr);
                }
            }
        });

        $("#page").on("pageClicked", function (event, pageIndex) {
            $("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('jumpClicked', function (event, pageIndex) {
            $("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('pageSizeChanged', function (event, pageSize) {
            $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        });
</script>
</body>
</html>