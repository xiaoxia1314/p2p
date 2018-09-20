<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./lib/bootstrapvalidator/css/bootstrapValidator.min.css">    
    <link rel="stylesheet" href="./lib/datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="./dist/css/real.min.css">
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
            <div class="col-sm-9 col-xs-12 rel">
            <button type="button" class="btn btn-primary"  id="perbtn"><span class="glyphicon glyphicon-chevron-right"></span></button>
                
                <div class="panel panel-default">
                    <div class="panel-heading">实名认证</div>
                    <div class="panel-body">
                        <p class='fp'>为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
                        <form class="form-horizontal" id="realName" method="post">
                            
                            <!-- 用户名 -->
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                                <div class="col-sm-9">
                                     <p id="username"></p>
                                </div>
                            </div>
                            <!-- 姓名 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">真实姓名</label>
                                <div class="col-sm-9">
                                <input type="text" name="realname" id="realname" class="form-control">
                                </div>
                            </div>
                            <!-- 性别 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">性别</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="sex" id="sex">
                                    <option>女</option>
                                    <option>男</option>
                                </select>
                                </div>
                            </div>
                            <!-- 证件类型 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">证件类型</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="type" id="type">
                                    <option>身份证</option>
                                    <option>驾驶证</option>
                                    <option>军官证</option>
                                </select>
                                </div>
                            </div>
                           <!-- 证件号码 -->
                           <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">证件号码</label>
                                <div class="col-sm-9">
                                    <input type="text" name="idcard" class="form-control" id="idcard">
                                </div>
                            </div>

                            <!-- 出生日期 -->
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">出生日期</label>
                                <div class="col-sm-9">
                                    <input id="birthDate" id="birthDate" name="birthDate" data-date-format="yyyy-mm-dd " class="form-control">
                                </div>
                            </div>

                            <!-- 证件地址 -->
                            <div class="form-group">
                                <label for="inputPassword3"  class="col-sm-3 control-label">证件地址</label>
                                <div class="col-sm-9">
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>
                            </div>

                            <!-- 身份证照片 -->
                            <div class="form-group">
                                <label class="col-sm-3 control-label">身份证照片</label>
                                <div class="col-sm-9">
                                    <p class="text-help text-primary">请点击“选择图片”,选择证件的正反两面照片。</p>
                                    <div class="col-sm-5 updatebox">
                                        <label for="file">
                                            <div class="panel updatepanel">
                                                <!-- <div class="addbox"><span class="icon-add-50"></span></div> -->
                                                <div class="addbox">上传正面</div>
                                                <input type="file" id="file" name="pic1" style="display: none" multiple/>
                                                <img class='updateimg0 ' />
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-sm-5 updatebox">
                                        <label for="file1">
                                            <div class="panel updatepanel">
                                                <!-- <div class="addbox"><span class="icon-add-50"></span></div> -->
                                                <div class="addbox">上传反面</div>
                                                <input type="file" id="file1" name="pic2" style="display: none" multiple/>
                                                <img class='updateimg1'/>
                                            </div>
                                        </label>
								    </div>
                                </div>
                            </div>
                            <!-- 提交 -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10">
                                    <button type="submit" id='btnclick' class="btn btn-primary">提交按钮</button>
                                </div>
                            </div>
                        </form>
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
    <script src="./lib/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
    <script src="./dist/js/checksession.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.js"></script>
    <script src="./lib/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="./lib/datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>
    <script src="./dist/js/cation.min.js"></script>
    <script src="./src/js/fold.js"></script>

<script>
    // 发送ajax
    $.get('./api/record.php',function(data){
        $('#username').html(data.username);
        //判断是否已经注册
        if(data.birthDate){
            // 将数据填在框中
            $('#realname').val(data.realname);
            $('#sex').val(data.sex);
            $('#type').val(data.type);
            $('#idcard').val(data.idcard);
            $('#birthDate').val(data.birthDate);
            $('#address').val(data.address);
            $('#pic1').html(data.realname);
            $('#pic2').html(data.realname);
            $("#btnclick").html('认证成功');
            //更改提交按钮的type为button ，不触发验证不允许更改
            $("#btnclick")[0].attributes[0].nodeValue='button';
        }
        // console.log(data);  
    },"json")
    var img1,img2;
    // 图片的获取
    document.getElementById('file').onchange = function() {
            var imgPath = this.files[0];
            img1=imgPath.name;
            console.log(imgPath);
            var fr = new FileReader();
            fr.onload = function() {
                var imgs = document.getElementsByClassName('updateimg0');
                imgs[imgs.length-1].src = fr.result;
            };
            fr.readAsDataURL(imgPath);
        };
        document.getElementById('file1').onchange = function() {
            var imgPath = this.files[0];
            img2=imgPath.name;
            var fr = new FileReader();
            fr.onload = function() {
                var imgs = document.getElementsByClassName('updateimg1');
                
                imgs[imgs.length-1].src = fr.result;
            };
            fr.readAsDataURL(imgPath);
        };
        //打印数据
        console.log(img1,img2);

        //时间插件
        $("#birthDate").datepicker({
            language: 'zh-CN',
            autoclose: true,
            startView: 2,
            weekStart: 1,
            todayBtn: 1,
            todayHighlight: 1,
            forceParse: 0,
            showMeridian: 1
        }).on('hide',function(e) {
                $('#realName').data('bootstrapValidator')
                    .updateStatus('birthDate', 'NOT_VALIDATED',null)
                    .validateField('birthDate');
            });;
</script>
</body>
</html>