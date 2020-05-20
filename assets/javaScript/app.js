



$(document).ready(function(){

  var helperLocation = (window.location.href).split('/');
  checkLocation(helperLocation[helperLocation.length - 1]);

  setInterval(function(){
      $.ajax({
          url: 'included_files/handlers/online_user_report.php',
          type: 'get',
          success: function( data){
              
          }
      });
  }, 12500);





  $(".fullScreenButton").click(function(){

      if (!document.fullscreenElement &&    // alternative standard method
          !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
        if (document.documentElement.requestFullscreen) {
          document.documentElement.requestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) {
          document.documentElement.msRequestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
          document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
          document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        }
      }
  });


  $('.showNotifications').click(function (){
      $('.notificationsContainerSide').toggleClass('show');
  });

 
  $(".logoutButton").click(function(){
      
      $.ajax({
          url: 'included_files/handlers/logout_handler.php',
          type: 'get',
          success: function( data){
              
              var helpNumber = data.substring(0, 1);
              setNotificationColor(helpNumber, data.substring(2, data.length));
              
              if (helpNumber == '0'){
                  $('.mainContainer').load('login.php');
                  if ($('.notificationsContainerSide.show').length > 0){
                      $('.notificationsContainerSide.show').removeClass('show');
                  }
              }

          }
      });
  
  
  });





  

 
  $(".appSettingsButton").click(function(){

      $.ajax({

          url: 'included_files/modules/appSettings/index.php',
          dataType: 'html',
          success: function(data) {
               //handle data object containing the html
               $('.contentContainerApp').html(data);
          },
          error: function(xhr, error){
              //generic error callback, you'll end up here when your file doesnt exist
              alert('error');
          }
      
      });
  });







 
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
 





      $('.dropDown').click(function(){
          $(this).toggleClass('show');
      })



      $('.loadingScreen').delay( 500 ).fadeOut();






      $(".set > .menu-heading").on("click", function() {
          if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this)
              .siblings(".content")
              .slideUp(200);
            $(".set > .menu-heading i")
              .removeClass("fa-minus")
              .addClass("fa-plus");
          } else {
            $(".set > .menu-heading i")
              .removeClass("fa-minus")
              .addClass("fa-plus");
            $(this)
              .find("i")
              .removeClass("fa-plus")
              .addClass("fa-minus");
            $(".set > .menu-heading").removeClass("active");
            $(this).addClass("active");
            $(".content").slideUp(200);
            $(this)
              .siblings(".content")
              .slideDown(200);
          }
        });




        window.onpopstate = function(event) {
          //alert(window.location.href);
          var helperLocation = (window.location.href).split('/');
          alert(helperLocation[helperLocation.length - 1]);
          checkLocation(helperLocation[helperLocation.length - 1]);

          
        }

 })






$('.clearAllNotifications').click(function (){
  $('.singleNotification').fadeOut(250);
  $('.singleNotification').delay(300).remove();
});




function hideSideNotif(){
  $('.notificationsContainerSide').toggleClass('show');
}


function openAllNotificationsPage(){
  $('.contentContainerApp').load('included_files/modules/allNotifications/index.php');
  var helperLocation = (window.location.href).split('/');
  if(helperLocation[helperLocation.length - 1] !== 'all_notifications'){
    window.history.pushState("AllNotifications", "All Notifications", "all_notifications");
  }
}

function openRegisterRequestPage(){
  $('.contentContainerApp').load('included_files/modules/registerRequests/index.php');
  var helperLocation = (window.location.href).split('/');
  if(helperLocation[helperLocation.length - 1] == 'register_requests'){
    window.history.pushState("RegisterRequests", "Register Requests", "register_requests");
  }
}

function openAllUsersPage(){
  $('.contentContainerApp').load('included_files/modules/allUsers/index.php');
  var helperLocation = (window.location.href).split('/');
  if(helperLocation[helperLocation.length - 1] !== 'all_users'){
    window.history.pushState("AllUsers", "All Users", "all_users");
  }
}

function openOnelineUsersPage(){
  $('.contentContainerApp').load('included_files/modules/onlineUsers/index.php');
  var helperLocation = (window.location.href).split('/');
  if(helperLocation[helperLocation.length - 1] !== 'online_users'){
    window.history.pushState("Online", "Online Users", "online_users");
  }
}


function openDashboardPage(){
  $('.contentContainerApp').load('included_files/modules/dashboard/index.php');
  var helperLocation = (window.location.href).split('/');
  if(helperLocation[helperLocation.length - 1] !== 'dashboard'){
    window.history.pushState("Dashboard", "Dashboard", "dashboard");
  }
}

function openMessagesPage(){
  $('.contentContainerApp').load('included_files/modules/messages/index.php');
  var helperLocation = (window.location.href).split('/');
  if(helperLocation[helperLocation.length - 1] !== 'messages'){
    window.history.pushState("Messages", "Messages", "messages");
  }
}



function checkLocation(location){
  switch (location) {
    case '':
      openDashboardPage();
      break;
    case 'all_notifications':
      openAllNotificationsPage();
      break;
    case 'register_requests':
      openRegisterRequestPage();
      break;
    case 'all_users':
      openAllUsersPage();
      break;
    case 'online_users':
      openOnelineUsersPage();
      break;
    case 'dashboard':
      openDashboardPage();
      break;
    case 'messages':
      openMessagesPage();
  }
}