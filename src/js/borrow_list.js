$.get('../../api/borrow_list.php',function(data){    
    // //数据
    var htmlStr=$('#borrowTelp').tmpl(data);
    $('#borrowDate').html(htmlStr);
},"json")