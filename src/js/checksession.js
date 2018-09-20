$.get('../../api/checksession.php',function(data){
    if(!data.isStatus){
        alert(data.message);
        location.href='../../login.php';
    }
},"json")