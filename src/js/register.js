$('#regForm').bootstrapValidator({
    // 验证时出现的图标
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',//显示验证成功图标
        invalid: 'glyphicon glyphicon-remove',//显示失败时的一个小图标
        validating: 'glyphicon glyphicon-refresh'//等待的图标
    },
    // 需要验证的字段
    fields: {
        // 用户名
        username: {
            message: '用户名不能为空',//默认提示信息
            validators: {
                // 不能为空
                notEmpty: {
                    message: '用户名必填不能为空'
                },
                // 长度的判断
                stringLength: {
                    min: 6,
                    max: 12,
                    message: '用户名长度在6~12位之间'
                },
                //正则判断不能输入汉字
                regexp: {
                    regexp: /^[a-zA-Z0-9_\.]+$/,
                    // message: '用户名只能由字母、数字、点和下划线组成。'
                },
                //threshold: 6, //有6字符以上才发送ajax请求，（input中输入一个字符，插件会向服务器发送一次，设置限制，6字符以上才开始）
                remote: {//ajax验证。server result:{"valid",true or false} 向服务发送当前input name值，获得一个json数据。例表示正确：{"valid",true}  
                    url: '../../api/checkuser.php',//验证地址
                    message: '用户名太受欢迎，请重新输入',//提示消息
                    delay: 1000,//每输入一个字符，就发ajax请求，服务器压力还是太大，设置2秒发送一次ajax（默认输入一个字符，提交一次，服务器压力太大）
                    type: 'POST'//请求方式

                },
            }
        },
        // 密码
        password: {
            message: '用户名不能为空',//默认提示信息
            validators: {
                // 不能为空
                notEmpty: {
                    message: '密码必填不能为空'
                },
                // 长度的判断
                stringLength: {
                    min: 6,
                    max: 18,
                    message: '用户名长度在6~18位之间'
                },
                different: {
                    field: 'username',
                    message: '用户名和密码不能相同。'
                }
            }
        },
        // 确认密码
        checkpwd: {
            validators: {
                notEmpty: {
                    message: '不能为空'
                },
                identical: {
                    field: 'password',
                    message: '两次密码不一致'
                },
            }
        },
        email: {
            validators: {
                // 不能为空
                notEmpty: {
                    message: '邮箱必填不能为空'
                },
                emailAddress: {
                    message: '请输入正确的邮箱格式'
                }
            }
        },
        phone: {
            validators: {
                // 不能为空
                notEmpty: {
                    message: '手机号码必填不能为空'
                },
                regexp: {
                    regexp: /^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                    message: '请输入正确的手机号码'
                }
            }
        },
     
    }

}).on('success.form.bv', function (e) {
    // 阻止浏览器默认行为
    e.preventDefault();
    // 获取到当前的表单
    var $form = $(e.target);
    //获取表单中的所有数据
    var data = $form.serialize();
    console.log(data);
    var validator = $form.data('bootstrapValidator');
    //发送ajax请求
    $.post('../../api/userAdd.php', data, function (rs) {
        //转换为json对象
        var result=JSON.parse(rs);
        if(result.isStatus==1){
            //模态框的标题更改
           $('#regModalTitle').html('注册成功');
           //内容更改
           $('#regModalContent').html('<span class="glyphicon glyphicon-ok"></span>'+result.message+"，等待<span id='num1'>5</span>跳转到登录页面");
           //定义跳转的初始值
           var number=4;
           //定义计时器
           var timeData=setInterval(()=>{
                $('#num1').html(number);
                number--;
                if(number==0){
                    clearInterval(timeData);
                    location.href='../../login.php';
                }
           },1000)
        }else{
            //模态框的标题更改
           $('#loginModalTitle').html('注册失败');
           //内容更改
           $('#loginModalContent').html('<span class="glyphicon glyphicon-remove"></span>'+data.message);
        }
        $('#regModal').modal('show');
    })
});


$('#loginForm').bootstrapValidator({
    // 验证时出现的图标
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',//显示验证成功图标
        invalid: 'glyphicon glyphicon-remove',//显示失败时的一个小图标
        validating: 'glyphicon glyphicon-refresh'//等待的图标
    },
    // 需要验证的字段
    fields: {
        // 用户名
        username: {
            message: '用户名不能为空',//默认提示信息
            validators: {
                // 不能为空
                notEmpty: {
                    message: '用户名必填不能为空'
                },
                // 长度的判断
                stringLength: {
                    min: 6,
                    max: 12,
                    message: '用户名长度在6~12位之间'
                },
                //正则判断不能输入汉字
                regexp: {
                    regexp: /^[a-zA-Z0-9_\.]+$/,
                    // message: '用户名只能由字母、数字、点和下划线组成。'
                }
            }
        },
        // 密码
        password: {
            message: '用户名不能为空',//默认提示信息
            validators: {
                // 不能为空
                notEmpty: {
                    message: '密码必填不能为空'
                },
                // 长度的判断
                stringLength: {
                    min: 6,
                    max: 18,
                    message: '用户名长度在6~18位之间'
                },
                different: {
                    field: 'username',
                    message: '用户名和密码不能相同。'
                }
            }
        }
    }

}).on('success.form.bv', function (e) {
    // 阻止浏览器默认行为
    e.preventDefault();
    // 获取到当前的表单
    var $form = $(e.target);
    //获取表单中的所有数据
    var data = $form.serialize();
    var validator1 = $form.data('bootstrapValidator');
    //发送ajax请求
    $.post('../../api/userlogin.php', data, function (rs) {
        //转换为json对象
        var data=JSON.parse(rs);
        if(data.isStatus=='1'){
           //模态框的标题更改
           $('#loginModalTitle').html('登录成功');
           //内容更改
           $('#loginModalContent').html('<span class="glyphicon glyphicon-ok"></span>'+data.message+"，等待<span id='num'>5</span>跳转到个人中心");
           //定义跳转的初始值
           var number=4;
           //定义计时器
           var timeData=setInterval(()=>{
                $('#num').html(number);
                number--;
                if(number==0){
                    clearInterval(timeData);                    
                    location.href='../../personal.php';
                }
           },1000)
        }else{
            //模态框的标题更改
           $('#loginModalTitle').html('登录失败');
           //内容更改
           $('#loginModalContent').html('<span class="glyphicon glyphicon-remove"></span>'+data.message);
        }
        $('#loginModal').modal('show');
    })
})