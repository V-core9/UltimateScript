$(document).ready(function(){
    $('.notificationsList').load('included_files/modules/allNotifications/view_notifications.php');


    $('.filterNotificationsButton').click(function(){
        
        var notif_level = $('.notification_level').val();
        var came_from = $('.notification_came_from').val();
        var user_id = $('.notif_user_id').val();
        var start_date = $('.startDate').val();
        var end_date = $('.endDate').val();

        
            
        $.ajax({
            url: 'included_files/modules/allNotifications/view_notifications.php',
            type: 'post',
            data: {notif_level : notif_level, came_from : came_from, user_id : user_id, start_date : start_date, end_date : end_date},
            success: function( data){
                    $('.notificationsList').html(data);
                    
            },
            error: function( data){
            }
        });

    })
})