import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
$('.btn.send-btn').on('click', function (e) {
    // e.preventDefault();
    // alert('xin chào các bạn.');
    // let message = $('#input').val();
    // $('#input').val('');
    // if (message != '') {
    //     $.ajax({
    //         url: 'comment',
    //         type: 'POST',
    //         dataType: 'json',
    //         data: {message: message},
    //     });
    // }
});

Echo.private('chat-room')
    .listen('ChatEvent', (e) => {
        $('#content').append(`<div class="well">${e.message}</div>`);
    });
