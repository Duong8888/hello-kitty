import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// Echo.private('chat')
//     .listen('NewMessageEvent', function (data) {
//         console.log(data);
//     });
// console.log(infoUser.id)
// Echo.private('private-chat.'+infoUser.id)
//     .listen('NewMessageEvent', function (data) {
//         console.log(data);
//     })
//     .subscribed(function () {
//     console.log('Subscribed to private-chat.' + infoUser.id);
// });

Echo.join('users-online')
    .here(users => {
        $.each(users, function (index,user){
            var activeStatus = $(`.index-${user.id}`);
            activeStatus.removeClass('avatar-away');
            activeStatus.addClass('avatar-online');
        });
        // users chứa danh sách người dùng hiện diện
        // users chứa danh sách người dùng hiện diện
        // users chứa danh sách người dùng hiện diện
        console.log(users);
        // Cập nhật danh sách người dùng đang đăng nhập trên giao diện
    })
    .joining(user => {
        console.log('Có thằng ngu ' + user['name'] + ' mới join vào hệ thống');
        let activeStatus = $(`.index-${user.id}`);
        activeStatus.addClass('avatar-online');
        activeStatus.removeClass('avatar-away');
        // Xử lý khi có người dùng mới tham gia
    })
    .leaving(user => {
        let activeStatus = $(`.index-${user.id}`);
        activeStatus.removeClass('avatar-online');
        activeStatus.addClass('avatar-away');
        console.log('Có thằng ngu ' + user['name'] + ' mới out hệ thống');
        // Xử lý khi người dùng rời đi
    });
