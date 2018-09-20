

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
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <ul class="nav navbar-nav" id="mainmenu">
        <li class="active"><a href="index.php?menu=1">首页</a></li>
        <li><a href="invest.php?menu=2">我要投资</a></li>
        <li><a href="borrow.php?menu=3">我要借款</a></li>
        <li><a href="personal.php?menu=4">个人中心</a></li>
        <li><a href="#?menu=5">新手指引</a></li>
        <li><a href="#?menu=6">关于我们</a></li>
      </ul>
  </div>
</nav>
<script>
  // 获取到地址栏上面的数字
  var index=location.href.split('=')[1];
  // console.log(index);
  // 为当前的设置active并为其他的兄弟移出active
  $('#mainmenu li').eq(index-1).addClass("active").siblings('li').removeClass('active');
</script>
  
