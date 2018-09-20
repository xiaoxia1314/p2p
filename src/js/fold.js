    var flag=true;
    $('#perbtn').on('click',function(){
        var parset=$(this).closest('.canvasoff');
       if(flag){
            parset.addClass('active1');
           flag=false;
           $(this).html('<span class="glyphicon glyphicon-chevron-left"></span>');
       }else{
            parset.removeClass('active1');
           flag=true;
           $(this).html('<span class="glyphicon glyphicon-chevron-right"></span>');
       }
    });

    var startX,stratY;
    $(window).on('touchstart',function(e){
        startX=e.originalEvent.changedTouches[0].clientX;
        stratY=e.originalEvent.changedTouches[0].clientY;
        
    })
    $(window).on('touchend',function(e){
        var endX=e.originalEvent.changedTouches[0].clientX;
        var endY=e.originalEvent.changedTouches[0].clientY;
        // console.log(endX,endY);
        var dx=endX-startX;
        var dy=endY-stratY;
        if(Math.abs(dx)>=100){
            $("#perbtn").trigger('click');
        }
        
    })
