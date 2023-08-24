$(document).ready(function () {

    let mainMessage = $('.middle');
    let idAction;
    const token = $('meta[name="csrf-token"]').attr('content');
    const actionLoadMessage = $('.action-message').attr('data-action');

    $('.btn.send-btn').on('click', function (e) {
        e.preventDefault();
        var messages = $('input[name="message-value"]').val(); // Tạo dữ liệu form
        console.log(token);
        console.log(messages)
        $.ajax({
            url: 'chat/send',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token // Thêm token CSRF cho bảo mật
            },
            data: {
                message: messages,
                user_id: infoUser.id,
                recipient_id: idAction
            },
            success: function (data) {
                console.log(data); // Log phản hồi từ máy chủ
                $('.messages').append(`
               <div class="chats chats-right">
                                <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle dreams_chat" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="message-content">
                                        ${data.status}
                                        <div class="chat-time">
                                            <div>
                                                <div class="time"><i class="fas fa-clock"></i> 10:06</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name">
                                        <h6>Doris Brown</h6>
                                    </div>
                                </div>
                                <div class="chat-action-btns ms-3">
                                    <div class="chat-action-col">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item dream_profile_menu">Copy <span><i class="far fa-copy"></i></span></a>
                                            <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                            <a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
                                            <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            `);
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            }
        })
    });

    $(document).on('click', '.user-list-item', function (e) {
        let clickedItem = e.currentTarget;
        $('.user-list-item').removeClass('active');
        e.currentTarget.classList.add('active');
        idAction = clickedItem.getAttribute('data-id');
    })

    function loadMessage(id) {
        $.ajax({})
    }
    //
    // Echo.private('private-chat.'+infoUser.id)
    //     .listen('NewMessageEvent', function (data) {
    //         console.log(data);
    //     });
});
