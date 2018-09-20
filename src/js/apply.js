//获取地址栏的id
var index=location.href.split('=')[1];
$('#type').val(index);

$('#apply').bootstrapValidator({
    // 验证时出现的图标
    feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',//显示验证成功图标
        invalid: 'glyphicon glyphicon-remove',//显示失败时的一个小图标
        validating: 'glyphicon glyphicon-refresh'//等待的图标
    },
    // 需要验证的字段
    fields: {
        // 借款金额
        borrowAmount: {
            validators: {
                // 不能为空
                notEmpty: {
                    message: '借款金额必填不能为空'
                },
            }
        },
        // 借款利息
        currentRate: {
            validators: {
                // 不能为空
                notEmpty: {
                    message: '借款利息必填不能为空'
                }
            }
        },
        // 最小投标
        minAmount: {
            validators: {
                // 不能为空
                notEmpty: {
                    message: '最小投标必填不能为空'
                }
            }
        },
        // 最大投标
        maxAmount: {
            validators: {
                // 不能为空
                notEmpty: {
                    message: '最大投标必填不能为空'
                }
            }
        },
         // 投标奖金
         rewardAmount: {
            validators: {
                // 不能为空
                notEmpty: {
                    message: '投标奖金必填不能为空'
                }
            }
        },
        // 投标标题
        borrowTitle: {
            validators: {
                // 不能为空
                notEmpty: {
                    message: '投标标题必填不能为空'
                }
            }
        },
        // 投标描述
        description: {
            validators: {
                // 不能为空
                notEmpty: {
                    message: '投标描述必填不能为空'
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
    var validator1 = $form.data('bootstrapValidator');
    $.post('../../api/apply.php',data,function(rs){
        if(rs.isStatus==1){
            alert(rs.message);
            location.href='../../borrow_list.php';
        }else{
            alert(rs.message);
        }
    },"json")
})