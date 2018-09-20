$('#realName').bootstrapValidator({
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
        birthDate: {
            validators: {
                notEmpty: {
                    message: '出生日期必填不能为空'
                },
            },
        },
        address:{
            validators: {
                notEmpty: {
                    message: '证件地址必填不能为空'
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
        var datanum=$form.serialize();
        console.log(datanum);
});