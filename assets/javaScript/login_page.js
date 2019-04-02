$(document).ready(function(){  

    
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
   
    
    $('ul.tabs li').not('.middleText').click(function(){
       var tab_id = $(this).attr('data-tab');
   
       $('ul.tabs li').removeClass('current');
       $('.tab-content').removeClass('current');
   
       $(this).addClass('current');
       $("#"+tab_id).addClass('current');
   });
   

   $("#registerButton").click(function(){
    var usernameRegister = $('#usernameRegister').val();
    var emailRegister = $('#emailRegister').val();
    var passwordRegister = $('#passwordRegister').val();
    var passwordRegisterSec = $('#passwordRegisterSec').val();
    
    $.ajax({
        url: 'included_files/handlers/register_handler.php',
        type: 'post',
        data: {usernameRegister : usernameRegister, emailRegister : emailRegister, passwordRegister : passwordRegister, passwordRegisterSec : passwordRegisterSec},
        success: function( data){
            var helpNumber = data.substring(0, 1);
            setNotificationColor(helpNumber, data.substring(2, data.length));
        }
    });


  });
   

  $("#loginButton").click(function(){
   var usernameLogin = $('#usernameLogin').val();
   var passwordLogin = $('#passwordLogin').val();
   var rememberLogin = '0';

   if ($('#rememberLogin').prop('checked')){
      var rememberLogin = '1';
   };
   
   $.ajax({
       url: 'included_files/handlers/login_handler.php',
       type: 'post',
       data: {usernameLogin : usernameLogin, passwordLogin : passwordLogin, rememberLogin : rememberLogin},
       success: function( data){
            var helpNumber = data.substring(0, 1);
            setNotificationColor(helpNumber, data.substring(2, data.length));
            if (helpNumber == 0){
                $('.mainContainer').load('application.php');  
                $('.loadingScreen').fadeIn(100);  
                $('.loadingScreen').delay(250).fadeOut(250);
            }
            
       }
   });


 });


 
 $('.loadingScreen').delay( 500 ).fadeOut();
   
   })




   $('.closeSideNotifications').click(function (){
    $('.notificationsContainerSide').toggleClass('show');
});

   