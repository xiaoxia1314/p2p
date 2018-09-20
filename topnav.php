<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!-- 下拉工具 -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <!-- 电话 -->
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone-alt"></span>028-86261949</a>
    </div>
    <!-- 内容 -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li id='appto'><a href="index.php">首页</a></li>
        <li><a href="#">帮助</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<img src='./images/contract.png' />">联系客服</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script src="./lib/jquery/jquery.min.js"></script>
<script>
  $.get('./api/checksession.php',function(data){
    if(data.isStatus){
      var htmlstr=`<li><a href="#">${data.username}</a></li>
        <li><a href="#">充值</a></li>
        <li><a href="./api/loginOut.php">注销</a></li>`;
        //追加到元素中
        $('#appto').after(htmlstr);
    }
    else{
      var htmlstr=`<li><a href="register.php">注册</a></li>
        <li><a href="login.php">登录</a></li>`;
        $('#appto').after(htmlstr);
    }
  },"json")
</script>
