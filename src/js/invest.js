$.get('../../api/invest.php',function(data){    
    // //数据
    var htmlStr=$('#borrowTelp').tmpl(data);
    $('#gridBody').html(htmlStr);
},"json")