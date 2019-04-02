$(document).ready(function(){

    $('.saveUserSettings').click(function(){
                    
            var colorScheme = $('.colorScheme').children("option:selected").val();
            var backgroundType = $('.backgroundType').children("option:selected").val();
            var languageSetting = $('.languageSettings').children("option:selected").val();

            if ($('#rememberLogin').prop('checked')){
                var rememberLogin = '1';
            };
            
            $.ajax({
                url: 'included_files/modules/appSettings/saveSettings.php',
                type: 'post',
                data: {colorScheme : colorScheme, backgroundType : backgroundType, languageSetting : languageSetting},
                success: function( data){
                        var helpNumber = data.substring(0, 1);
                        setNotificationColor(helpNumber, data.substring(2, data.length));
                        $('link#mystyle').replaceWith('<link rel="stylesheet" id="myStyle" href="assets/style/main_'+ colorScheme +'.css" type="text/css" />');
                        
                },
                error: function( data){
                    setNotificationColor(9, data);
                }
            });


    })

    $('.cancelSave').click(function(){
        $('.mainContainer').load('application.php');  
        
    })


    

})





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
        $('.side_notif'+customId).css('box-shadow', '0px 0px 5px white');

    } else if (level == '2'){
        $('.notif'+customId).css('background', 'rgba(255,255,0,0.35)');
        $('.notif'+customId).css('box-shadow', '0px 0px 5px white');
        $('.side_notif'+customId).css('background', 'rgba(255,255,0,0.25)');
        $('.side_notif'+customId).css('box-shadow', '0px 0px 5px white');

    } else if (level == '3'){
        $('.notif'+customId).css('background', 'rgba(255,0,0,0.35)');
        $('.notif'+customId).css('box-shadow', '0px 0px 5px white');
        $('.side_notif'+customId).css('background', 'rgba(255,0,0,0.25)');
        $('.side_notif'+customId).css('box-shadow', '0px 0px 5px white');

    } else if (level == '4'){
        $('.notif'+customId).css('background', 'rgba(255,0,255,0.35)');
        $('.notif'+customId).css('box-shadow', '0px 0px 5px white');
        $('.side_notif'+customId).css('background', 'rgba(255,0,255,0.25)');
        $('.side_notif'+customId).css('box-shadow', '0px 0px 5px white');

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