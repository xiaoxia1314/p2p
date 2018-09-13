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
        phone:{
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
        }
    }
})