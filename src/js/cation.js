$('#realName').bootstrapValidator({
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',//显示验证成功或者失败时的一个小图标
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
        trigger: 'change',
        pic1:{
            validators: {
                notEmpty: {
                    message: '正面必填不能为空'
                }
            },
        },
        pic2:{
            validators: {
                notEmpty: {
                    message: '反面必填不能为空'
                }
            },
        },
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
        },
    }
}).on('success.form.bv', function (e) {
    // 阻止浏览器默认行为
    e.preventDefault();
    // 获取到当前的表单
    var $form = $(e.target);
    //获取表单中的所有数据
    var data = $form.serialize();
    // console.log(data);
    var validator1 = $form.data('bootstrapValidator');
    //发送ajax请求
    $.post('../../api/real.php',data,function(rs){
        if(rs.isStatus==1){
            location.href='../../real_name.php';
        }
        
    },"json")
})
