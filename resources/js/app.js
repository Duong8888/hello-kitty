import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// Echo.private('chat')
//     .listen('NewMessageEvent', function (data) {
//         console.log(data);
//     });
console.log(infoUser.id)
Echo.private('private-chat.'+infoUser.id)
    .listen('NewMessageEvent', function (data) {
        console.log(data);
    })
    .subscribed(function () {
    console.log('Subscribed to private-chat.' + infoUser.id);
});

let usersList = $('.display-user');
Echo.join('users-online')
    .here(users => {
        // users chứa danh sách người dùng hiện diện
        console.log(users);
        $.each(users, function (index, user) {
            if(user.id !== infoUser.id){
                usersList.append(`
               <li class="user-list-item" data-id="${user.id}">
                   <div>
                       <div class="avatar avatar-online">
                           <img src="${user.avatar}" class="rounded-circle" alt="image">
                       </div>
                   </div>
                   <div class="users-list-body">
                       <div>
                           <h5>${user['name']}</h5>
                           <p>It seems logical that the</p>
                       </div>
                       <div class="last-chat-time">
                           <small class="text-muted">05 min</small>
                           <div class="new-message-count">11</div>
                       </div>
                   </div>
               </li>
            `);
            }
        })
        // Cập nhật danh sách người dùng đang đăng nhập trên giao diện
    })
    .joining(user => {
        console.log('Có thằng ngu ' + user['name'] + ' mới join vào hệ thống');
        usersList.append(`
               <li class="user-list-item" data-id="${user.id}">
                   <div>
                       <div class="avatar avatar-online">
                           <img src="${user.avatar}" class="rounded-circle" alt="image">
                       </div>
                   </div>
                   <div class="users-list-body">
                       <div>
                           <h5>${user['name']}</h5>
                           <p>It seems logical that the</p>
                       </div>
                       <div class="last-chat-time">
                           <small class="text-muted">05 min</small>
                           <div class="new-message-count">11</div>
                       </div>
                   </div>
               </li>
            `);
        // Xử lý khi có người dùng mới tham gia
    })
    .leaving(user => {
        var userOut = $('li[data-id="'+user.id+'"]');
        userOut.hide();
        // Xử lý khi người dùng rời đi
    });
