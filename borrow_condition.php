<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./lib/bootstrapvalidator/css/bootstrapValidator.min.css">    
    <link rel="stylesheet" href="./dist/css/personal.min.css">    
    <link rel="stylesheet" href="./dist/css/real.min.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/checksession.min.js"></script>
    <script src="./dist/js/fold.min.js"></script>    
    
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
                        <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
                         <div id="main" style="height:400px"></div>
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
<script src="./lib/echarts/echarts-all.js"></script>
<script src="./lib/bootstrap/js/bootstrap.js"></script>
<script src="./lib/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="./dist/js/borrow_list.min.js"></script>
<script src="./dist/js/index.min.js"></script>
<script type="text/javascript">
        // 基于准备好的dom，初始化echarts图表
        var myChart = echarts.init(document.getElementById('main'));   
        var option = {
            title : {
                text: '借款类型的金额统计',
                subtext: '2018-09统计',
                x:'center'
            },
            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            // 提示内容
            legend: {
                orient : 'vertical',
                x : 'left',
                data:[]
            },
            // 工具条
            toolbox: {
                show : true,
                feature : {
                    mark : {show: false},
                    dataView : {show: false, readOnly: false},
                    magicType : {
                        show: false, 
                        type: ['pie', 'funnel'],
                        option: {
                            funnel: {
                                x: '25%',
                                width: '50%',
                                funnelAlign: 'left',
                                max: 1548
                            }
                        }
                    },
                    restore : {show: false},
                    saveAsImage : {show: true}
                }
            },
            calculable : true,
            series : [
                {
                    name:'访问来源',
                    type:'pie',
                    radius : '55%',
                    center: ['50%', '60%'],
                    data:[]
                }
            ]
        };
                    
        // 为echarts对象加载数据 
        myChart.setOption(option); 
        $.get('./api/condition.php',function(rs){
            myChart.hideLoading();
            console.log(rs);
            option.legend.data=rs.title;
            option.series[0].data=rs.data;
            myChart.setOption(option); 
        },"json")
    </script>
</body>
</html>