



$(document).ready(function(){

   
    $(".logoutButton").click(function(){
    
        $.ajax({
            url: 'included_files/handlers/logout_handler.php',
            type: 'get',
            success: function( data){
                
                var helpNumber = data.substring(0, 1);
                setNotificationColor(helpNumber, data.substring(2, data.length));

                if (helpNumber == '0'){
                    $('.mainContainer').load('login.php');
                }

            }
        });
    
    
    });
   
    function setNotificationColor(level, message){
        
        var customId = Math.floor(Math.random() * 1000000);
        customId = "notification_"+customId;

        var result = message.split('|||');

        
        $('.notificationsContainer').append('<div class="singleNotification" id="'+customId+'"><h3>'+result[0]+'</h3><p>'+result[1]+'</p><i class="fas fa-times closeNotification"></i></div>');

        
        if (level == '0'){
            $('#'+customId).css('background', 'rgba(0,255,0,0.25)');
            $('#'+customId).css('box-shadow', '0px 0px 5px white');

        } else if (level == '1'){
            $('#'+customId).css('background', 'rgba(0,0,255,0.25)');
            $('#'+customId).css('box-shadow', '0px 0px 5px white');

        } else if (level == '2'){
            $('#'+customId).css('background', 'rgba(255,255,0,0.25)');
            $('#'+customId).css('box-shadow', '0px 0px 5px white');

        } else if (level == '3'){
            $('#'+customId).css('background', 'rgba(255,0,0,0.25)');
            $('#'+customId).css('box-shadow', '0px 0px 5px white');

        } else if (level == '4'){
            $('#'+customId).css('background', 'rgba(255,0,255,0.25)');
            $('#'+customId).css('box-shadow', '0px 0px 5px white');

        } else if (level == '9'){
            $('#'+customId).css('background', 'rgba(255,0,0,1)');
            $('#'+customId).css('box-shadow', '0px 0px 5px white');

        };

        
        $('.closeNotification').click(function(){
            $(this).parent('#'+customId).hide();
        });





        $('#'+customId).delay( 10000 ).fadeOut( 500 );
        setTimeout(function() {
            $('#'+customId).remove();
          }, 15000);
    };
   





        $('.dropDown').click(function(){
            $(this).toggleClass('show');
        })



        $('.loadingScreen').delay( 500 ).fadeOut();






        $(".set > a").on("click", function() {
            if ($(this).hasClass("active")) {
              $(this).removeClass("active");
              $(this)
                .siblings(".content")
                .slideUp(200);
              $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
            } else {
              $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
              $(this)
                .find("i")
                .removeClass("fa-plus")
                .addClass("fa-minus");
              $(".set > a").removeClass("active");
              $(this).addClass("active");
              $(".content").slideUp(200);
              $(this)
                .siblings(".content")
                .slideDown(200);
            }
          });








   })