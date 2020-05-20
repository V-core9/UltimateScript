$(document).ready(function(){
    $('.registerList').load('included_files/modules/registerRequests/view.php');


})


function approveRegisterRequest(request_user_id){
        
    $.ajax({
        url: 'included_files/modules/registerRequests/approve_request.php',
        type: 'post',
        data: {request_user_id : request_user_id},
        success: function( data){
                
                
            var helpNumber = data.substring(0, 1);
            setNotificationColor(helpNumber, data.substring(2, data.length));

            if (helpNumber == '0'){
                $('.registerList').load('included_files/modules/registerRequests/view.php');
            }
                
        },
        error: function( data){
            
        }
    });

}





function setNotificationColor(level, message){
        
    var customId = Math.floor(Math.random() * 1000000);
    customId = "notification_"+customId;

    var result = message.split('|||');

    
    $('.notificationsContainer').append('<div class="singleNotification notif'+customId+'"><h3>'+result[0]+'</h3><p>'+result[1]+'</p><p class="timeOf">'+result[2]+'</p><i class="fas fa-times closeNotification"></i></div>');

    $('.notificationsContainerSide').append('<div class="singleNotification side_notif'+customId+'"><h3>'+result[0]+'</h3><p>'+result[1]+'</p><p class="timeOf">'+result[2]+'</p><i class="fas fa-times closeNotification"></i></div>');

    
    if (level == '0'){
        $('.notif'+customId).css('background', 'rgba(0,255,0,0.35)');
        $('.notif'+customId).css('box-shadow', '0px 0px 5px white');
        $('.side_notif'+customId).css('background', 'rgba(0,255,0,0.25)');
        $('.side_notif'+customId).css('box-shadow', '0px 0px 5px white');

    } else if (level == '1'){
        $('.notif'+customId).css('background', 'rgba(0,0,255,0.35)');
        $('.notif'+customId).css('box-shadow', '0px 0px 5px white');
        $('.side_notif'+customId).css('background', 'rgba(0,0,255,0.25)');

    } else if (level == '2'){
        $('.notif'+customId).css('background', 'rgba(255,255,0,0.35)');
        $('.notif'+customId).css('box-shadow', '0px 0px 5px white');
        $('.side_notif'+customId).css('background', 'rgba(255,255,0,0.25)');

    } else if (level == '3'){
        $('.notif'+customId).css('background', 'rgba(255,0,0,0.35)');
        $('.notif'+customId).css('box-shadow', '0px 0px 5px white');
        $('.side_notif'+customId).css('background', 'rgba(255,0,0,0.25)');

    } else if (level == '4'){
        $('.notif'+customId).css('background', 'rgba(255,0,255,0.35)');
        $('.notif'+customId).css('box-shadow', '0px 0px 5px white');
        $('.side_notif'+customId).css('background', 'rgba(255,0,255,0.25)');

    } else if (level == '9'){
        $('.notif'+customId).css('background', 'rgba(255,0,0,1)');
        $('.notif'+customId).css('box-shadow', '0px 0px 5px white');
        $('.side_notif'+customId).css('background', 'rgba(255,0,0,1)');
        $('.side_notif'+customId).css('box-shadow', '0px 0px 5px white');

    };

    
    $('.closeNotification').click(function(){
        $(this).parent('.singleNotification').hide();
    });





    $('.notif'+customId).delay( 10000 ).fadeOut( 500 );
    setTimeout(function() {
        $('.singleNotification'+customId).remove();
      }, 15000);
};