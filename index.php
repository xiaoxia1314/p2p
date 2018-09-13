<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./dist/css/index.min.css">
    <title>Document</title>
</head>
<body>
 <!-- 引入头部-->
 <?php 
      require_once('header.php');
    ?>
<!-- 轮播图 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./images/banner01.jpg" alt="图1">
      
    </div>
    <div class="item">
      <img src="./images/banner02.jpg" alt="图2"> 
    </div>
  </div>

  <!-- 左右控件 -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- 三个特色 -->
<div class="container" id="fearth">
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <h5>投资理财</h5>
      <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</P>
    </div>
    <div class="col-sm-4 col-xs-12">
      <h5>投资理财</h5>
      <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</P>
    </div>
    <div class="col-sm-4 col-xs-12">
      <h5>投资理财</h5>
      <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</P>
    </div>
  </div>
</div>

<!-- 进行中借款 -->
<div class="container">
    <div class="panel panel-default">
      <!-- 头部 -->
      <div class="panel-heading clearfix">
        <h2 class="pull-left">进行中借款</h2>
        <a href="#" class="pull-right">进行投资列表</a>
      </div>
      <!-- 表格 -->
      <table class="table">
          <thead>
            <tr>
              <th>借款人</th>
              <th class="tigger">借款标题</th>
              <th>年利率</th>
              <th>金额</th>
              <th class="tigger">还款方式</th>
              <th>进度</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>张三</td>
              <td class="tigger">给我2000度过难关</td>
              <td>10.00%</td>
              <td>2,000.00</td>
              <td class="tigger">按月分期还款</td>
              <td>78.00%</td>
              <td><button type="button" class="btn btn-danger btn-sm">查看</button></td>
            </tr>
          </tbody>
        </table>
    </div>
</div>


<!-- 资讯-->
<div class="container">
   <div class="row">
     <!-- 资讯 -->
     <div class="col-sm-6 col-xs-12">
        <div class="panel panel-default">
            <!-- 头部 -->
            <div class="panel-heading clearfix">
                <h2 class="pull-left">企业最新资讯</h2>
                <a href="#" class="pull-right">更多资讯</a>
            </div>
            <!-- 内容 -->
            <div class="panel-body">
                <ul>
                  <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                  <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                  <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                </ul>
            </div>
        </div>
     </div>
     <!-- 用户反馈 -->
     <div class="col-sm-6 col-xs-12">
        <div class="panel panel-default">
                <!-- 头部 -->
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">用户反馈</h2>
                    <a href="#" class="pull-right">更多资讯</a>
                </div>
                <!-- 内容 -->
                <div class="panel-body">
                    <ul>
                      <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
            </div>
     </div>

     <!-- 理财经验 -->
     <div class="col-sm-6 col-xs-12">
        <div class="panel panel-default">
                <!-- 头部 -->
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">理财经验</h2>
                    <a href="#" class="pull-right">更多资讯</a>
                </div>
                <!-- 内容 -->
                <div class="panel-body">
                    <ul>
                      <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
                </div>
            </div>
     </div>

     <!-- 活动分享 -->
     <div class="col-sm-6 col-xs-12">
        <div class="panel panel-default">
                <!-- 头部 -->
                <div class="panel-heading clearfix">
                    <h2 class="pull-left">活动分享</h2>
                    <a href="#" class="pull-right">更多资讯</a>
                </div>
                <!-- 内容 -->
                <div class="panel-body">
                    <ul>
                      <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                      <li><a href="#">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></li>
                    </ul>
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