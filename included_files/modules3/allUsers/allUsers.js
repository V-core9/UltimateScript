$(document).ready(function(){

    $('.allUsersList').load('included_files/modules/allUsers/view.php')




})


function editUserButton(user_id){

            
    $.ajax({
        url: 'included_files/modules/allUsers/edit.php',
        type: 'post',
        data: {user_id : user_id},
        success: function( data){
                $('.contentContainerApp').html(data);
                
        },
        error: function( data){
        }
    });
}


function backAllUsersPage(){
    $('.contentContainerApp').load('included_files/modules/allUsers/index.php')
}