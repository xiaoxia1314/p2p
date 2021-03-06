$('#profile').bootstrapValidator({
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',//显示验证成功或者失败时的一个小图标
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        // 真实姓名
        realname: {
            validators: {
                notEmpty: {
                    message: '真实姓名必填不能为空'
                },
                stringLength: {
                    min: 2,
                    max: 12,
                    message: '真实姓名长度2~12'
                },
                regexp: {
                    regexp: /^[\u4e00-\u9fa5]+$/,
                    message: '真实姓名只能是汉字。'
                },

            },
        },
        idcard: {
            validators: {
                notEmpty: {
                    message: '身份证号必填不能为空'
                },
                regexp:{
                    regexp:/^[1-9]\d{5}(18|19|2([0-9]))\d{2}(0[0-9]|10|11|12)([0-2][1-9]|30|31)\d{3}[0-9Xx]$/,
                    message:'请输入正确的身份证号码'
                }
            },
        },
        mobile: {
            validators: {
                notEmpty: {
                    message: '电话号码必填不能为空'
                },
                regexp:{
                    regexp:/^\d{3}-\d{8}|\d{4}-\d{7}$|^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                    message:'请输入正确的座机或者手机号码'
                }
            },
        },
        tel:{
            validators: {
                notEmpty: {
                    message: '手机号码必填不能为空'
                },

                regexp:{
                    regexp:/^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                    message:'请输入正确的手机号码'
                }
            },
        },
        address:{
            validators: {
                notEmpty: {
                    message: '地址必填不能为空'
                },

                regexp:{
                    regexp:/^.+\u7701.+\u5e02.*$/,
                    message:'请输入正确的地址'
                }
            },
        }
    }
})
.on('success.form.bv', function(e) {
        //阻止浏览器的默认行为
        e.preventDefault();
        var $form= $(e.target),
        //获取表单所有数据
        var data=$form.serialize();
        console.log(data);
        validator = $form.data('bootstrapValidator');

});